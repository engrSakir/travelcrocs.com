<?php

namespace App\Http\Controllers\Administrative;

use App\Http\Controllers\Controller;
use App\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $languages = Language::orderBy('id', 'desc')->get();
        return view('administrative.language.index', compact('languages'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $content_of_json_file = file_get_contents(resource_path('lang').'/'.App::getLocale().'.json');
        $contents = json_decode($content_of_json_file);
        return view('administrative.language.create', compact( 'contents'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'language_name'      => 'required|string|min:2|max:12|unique:languages,name,',
            'language_code'      => 'required|string|min:2|max:12|unique:languages,code,',
            'language_flag_icon' => 'required|string|min:2|max:250',
            'language_status'    => 'required|boolean',
        ]);
        $language = new Language();
        $language->code = $request->language_code;
        $language->name     = $request->language_name;
        $language->status   = $request->language_status;
        $language->flag     = $request->language_flag_icon;

        $content = json_encode($request->word);
        if ($content === 'null') {
            return back()->with(['message' => __('Please fill one minimum one field'),'type' => 'danger']);
        }else{
            try {
                $language->save();
                file_put_contents(resource_path('lang/') . $language->code . '.json', $content);
                return redirect()->route('administrative.language.edit', $language->id)->with(['message' => __('Successfully added '.$language->name),'type' => 'success']);
            }catch (\Exception $exception){
                return back()->with(['message' => __('Something going wrong. Error: '.$exception),'type' => 'error']);
            }
        }
    }

    /**
     * @param $id
     */
    public function show($id)
    {
        if (Language::where('id', $id)->exists()){
            $language = Language::find($id);
            $content_of_json_file = file_get_contents(resource_path('lang').'/'.$language->code.'.json');
            $contents = json_decode($content_of_json_file);
            return view('administrative.language.show', compact('language', 'contents'));
        }else{
            return back()->with(['message' => __('Invalid language'),'type' => 'warning']);
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        if (Language::where('id', $id)->exists()){
            $language = Language::find($id);
            $content_of_json_file = file_get_contents(resource_path('lang').'/'.$language->code.'.json');
            $contents = json_decode($content_of_json_file);
            return view('administrative.language.edit', compact('language', 'contents'));
        }else{
            return back()->with(['message' => __('Invalid language'),'type' => 'warning']);
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        if (Language::where('id', $id)->exists()){
            $language = Language::find($id);
            $request->validate([
                'language_name'      => 'required|string|min:2|max:12|unique:languages,name,'.$id,
                'language_code'      => 'required|string|min:2|max:12|unique:languages,code,'.$id,
                'language_flag_icon' => 'required|string|min:2|max:250',
                'language_status'    => 'required|boolean',
            ]);
            $content = json_encode($request->word);
            if ($content === 'null') {
                return back()->with(['message' => __('Please fill one minimum one field'),'type' => 'danger']);
            }else{
                if ($request->language_code != $language->code){
                    //if language code means json file name is changed need to rename first.
                    rename(resource_path('lang/').$language->code . '.json', $request->language_code . '.json');
                    $language->code = $request->language_code;
                }
                $language->name     = $request->language_name;
                $language->status   = $request->language_status;
                $language->flag     = $request->language_flag_icon;
                try {
                    $language->save();
                    file_put_contents(resource_path('lang/') . $language->code . '.json', $content);
                    return back()->with(['message' => __('Successfully updated'),'type' => 'success']);
                }catch (\Exception $exception){
                    return back()->with(['message' => __('Something going wrong. Error: '.$exception),'type' => 'error']);
                }
            }
        }else{
            return back()->with(['message' => __('Invalid language'),'type' => 'warning']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Language::where('id', $id)->exists()){
            $language = Language::find($id);
            try {
                unlink(resource_path('lang/').$language->code . '.json');
                $language->delete();
                return response()->json([
                    'type' => 'success',
                    'message' => 'successfully deleted !!! ',
                ]);
            }catch (\Exception $exception){
                return response()->json([
                    'type' => 'danger',
                    'message' => 'Error !!! '.$exception->getMessage(),
                ]);
            }
        }else{
            return response()->json([
                'type' => 'danger',
                'message' => 'Invalid language !!! ',
            ]);
        }
    }
}
