<script>
    $(document).ready(function() {
        //Chose image
        $(".image-chose-btn").click(function (){
            $(this).parent().find('.image-importer').click();
        })
        //Display image
        $(".image-importer").change(function (event){
            if(event.target.files.length > 0) {
                $(this).parent().parent().find('.image-display').attr("src",URL.createObjectURL(event.target.files[0]));
            }
        })
        //Reset image
        $(".image-reset-btn").click(function (){
            $(this).parent().parent().find('.image-display').attr("src",$(this).val());
        })
    });
</script>
