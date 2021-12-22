jQuery(document).ready(function($) {

    if($('body').hasClass('single-cpt_books')) {
        console.log('Working Here');
        var book_url = $(".book_read").attr('href');
        $('.flipbook_container').flipBook(book_url, {
            soundEnable: false,
            direction: DFLIP.DIRECTION.RTL,
            pdfjsSrc: "libs/pdf.min.js",
            pdfjsCompatibilitySrc: "libs/compatibility.js",
            pdfjsWorkerSrc: "libs/pdf.worker.min.js",
            threejsSrc: "libs/three.min.js",
            mockupjsSrc: "libs/mockup.min.js",
            imagesLocation: "../images",
            imageResourcesPath: "../images/pdfjs/",
            cMapUrl: "libs/cmaps/"
        }); 
    }
});