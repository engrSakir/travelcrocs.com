#[travelcrocs.com](https://travelcrocs.com)

Development start from 13-11-2020 to 13-7-2021 (240days). Total update 34. 

#Trello 
[Full project description](https://trello.com/b/rPjuu69o/travelcrocscom)

#Packages 
[laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)
[spatie-laravel-translatable](https://github.com/spatie/laravel-translatable)
[spatie-laravel-permission](https://spatie.be/docs/laravel-permission/v3/installation-laravel)
[laravel-page-speed](https://github.com/renatomarinho/laravel-page-speed)
[yajra-laravel-datatables](https://github.com/yajra/laravel-datatables)




#Credentials
Admin
............................................\
Email: admin@travelcrocs.com
Password: password

Vendor
............................................\
Email: vendor@travelcrocs.com
Password: password

User
............................................\
Email: user@travelcrocs.com
Password: password

#Permissions
administrative-access >> can access full administrative panel
vendor-access >> can access limited vendor panel
vendor-access + vendor-permission >> can access fill vendor panel
user-access >> can access full user panel

#User re-direct
re-direct by own permission
re-direct from web.php home

#Socialite
GITHUB_CLIENT_ID=28fcdae6cb7feaf58d51
GITHUB_CLIENT_SECRET=ca2a7a3b34937bc23a8f72c6a4460e46198da168
GITHUB_CLIENT_REDIRECT_URL=http://travelcrocs.test/login/github/redirect

API
1. https://test.api.amadeus.com/v1/security/oauth2/token    //Access token generator
    Need to pass,
        a. client_id
        b. client_secret
        
2. https://test.api.amadeus.com/v1/reference-data/locations?subType=CITY,AIRPORT&keyword=MUC&countryCode=DE // search by city and airport        
2. https://test.api.amadeus.com/v1/reference-data/locations?subType=CITY,AIRPORT&keyword=UK // search by city or airport keyword 
        subType :CITY,AIRPORT 
        keyword :----- 
