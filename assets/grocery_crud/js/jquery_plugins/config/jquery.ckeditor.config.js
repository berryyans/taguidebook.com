/*
script ori
$(function(){
	$( 'textarea.texteditor' ).ckeditor({toolbar:'Full'});
	$( 'textarea.mini-texteditor' ).ckeditor({toolbar:'Basic',width:700});
});*/

$(function() {
    $('textarea.texteditor').ckeditor({
    toolbar:'Full',
            //this code below for kcfinder           
            filebrowserBrowseUrl: 'http://localhost/godrive/assets/grocery_crud/texteditor/ckeditor/kcfinder/browse.php?opener=ckeditor&amp;amp;type=files',
            filebrowserImageBrowseUrl: 'http://localhost/godrive/assets/grocery_crud/texteditor/ckeditor/kcfinder/browse.php?opener=ckeditor&amp;amp;type=images',
            filebrowserFlashBrowseUrl: 'http://localhost/godrive/assets/grocery_crud/texteditor/ckeditor/kcfinder/browse.php?opener=ckeditor&amp;amp;type=flash',
            filebrowserUploadUrl: 'http://localhost/godrive/assets/grocery_crud/texteditor/ckeditor/kcfinder/upload.php?opener=ckeditor&amp;amp;type=files',
            filebrowserImageUploadUrl: 'http://localhost/godrive/assets/grocery_crud/texteditor/ckeditor/kcfinder/upload.php?opener=ckeditor&amp;amp;type=images',
            filebrowserFlashUploadUrl: 'http://localhost/godrive/assets/grocery_crud/texteditor/ckeditor/kcfinder/upload.php?opener=ckeditor&amp;amp;type=flash'



    });
    $('textarea.mini-texteditor').ckeditor({
            language: 'en',
            toolbar: 'Basic',
            width: 700
    });
});