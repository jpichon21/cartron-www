function deleteCategory(id){
    var retVal = confirm("La suppression de cette catégorie va entrainer la suppression de tout ses enfants.");

    if( retVal == true ){
        window.location = 'supprimer/Category/'+id
    }
}

$('tr.download').each(function () {
    addDownloadFormDeleteLink($(this), true);
});
var isClick = false;
var $collectionHolder;

// setup an "add a download" link
var $addDownloadButton = $('<button type="button" class="add_download_link">Ajouter un fichier</button>');
var $newLinkLi = $('').after($addDownloadButton);
var nbDownload = $('.download').length;
$(document).ready(function () {

    $('.styledselect_form_1').selectbox({
        inputClass: "styledselect_form_1"
    });

    // Get the ul that holds the collection of downloads
    $collectionHolder = $('tr.downloads');

    // add a delete link to all of the existing download form li elements
    $collectionHolder.find('li').each(function () {
        addDownloadFormDeleteLink($(this), false);
    });

    // add the "add a download" anchor and li to the downloads ul
    $collectionHolder.append($newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionHolder.data('index', $collectionHolder.find(':input').length);

    $addDownloadButton.click(function (e) {
        // add a new download form (see next code block)
        addDownloadForm($collectionHolder, $newLinkLi);
    });
});

function addDownloadForm($collectionHolder, $newLinkLi) {
    isClick = true;
    // Get the data-prototype explained earlier
    var prototype = $collectionHolder.attr('data-prototype');

    // get the new index
    var index = $collectionHolder.data('index') + nbDownload + 7;
    nbDownload = 0;

    var newForm = prototype;
    // You need this only if you didn't set 'label' => false in your downloads field in TaskType
    // Replace '__name__label__' in the prototype's HTML to
    // instead be a number based on how many items we have
    // newForm = newForm.replace(/__name__label__/g, index);

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    newForm = newForm.replace(/__name__/g, index);

    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the "Add a download" link li
    var $newFormLi = $('<th valign="top">Titre du fichier :</th>').after('<td></td>').append(newForm);
    $addDownloadButton.before($newFormLi);

    // add a delete link to the new form
    addDownloadFormDeleteLink($newFormLi, false);
}

function addDownloadFormDeleteLink($downloadFormLi, $canNext) {
    if (isClick) {
        var $removeFormButton = $('<button type="button">Supprimer ce fichier</button>');
        $downloadFormLi.append($removeFormButton);
    } else {
        var $removeFormButton = $('<tr><th valign="top"><button type="button">Supprimer ce fichier</button></th></tr>');
        $downloadFormLi.after($removeFormButton);
    }
    

    $removeFormButton.click(function (e) {
        // remove the li for the download form
        if ($canNext) {
            $downloadFormLi.prev().remove();
            $downloadFormLi.next().remove();
        }
        $downloadFormLi.remove();
    });
}

var initLayout = function() {
		
    $('#site_cartronbundle_collectiontype_color').ColorPicker({
        onSubmit: function(hsb, hex, rgb, el) {
            $(el).val(hex);
            $(el).ColorPickerHide();
        },
        onBeforeShow: function () {
            $(this).ColorPickerSetColor(this.value);
        }
    })
    .bind('keyup', function(){
        $(this).ColorPickerSetColor(this.value);
    });

};
    EYE.register(initLayout, 'init');
