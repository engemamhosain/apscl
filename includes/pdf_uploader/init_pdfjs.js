
function ajax_full_text(data_with_full_text){
    
    $.post(tg.config.k20api + 'pdf-upload/full_text_in.php', 
         
        data_with_full_text
         , function(data){
                 console.log('posted ',data);
             }).fail(function(err){
                     console.error(err.responseJSON);
                 });
}


function load_pdf(pdf_meta){
    console.log("loading. ... ",pdf_meta, pdf_meta.file_url);

    pdfjsLib.getDocument(pdf_meta.file_url).promise.then(function (pdf) {
        var pdfDocument = pdf;
        var pagesPromises = [];

        for (var i = 0; i < pdf.numPages; i++) {
            // Required to prevent that i is always the total of pages
            (function (pageNumber) {
                pagesPromises.push(getPageText(pageNumber, pdfDocument));
            })(i + 1);
        }

        Promise.all(pagesPromises).then(function (pagesText) {

            // Display text of all the pages in the console
            console.log('??? ',pagesText);
             /*

                {
            pdf_id:'2', 
            pdf_name:'2 smaple-manual-for-text-searche.pdf', 
            start_page: 0,
            text_array: in_text_array
         }
             */
             ajax_full_text({
            pdf_id:pdf_meta.pdf_id, 
            pdf_name:pdf_meta.file_url, 
            start_page: 0,
            text_array: pagesText
         });
        });

    }, function (reason) {
        // PDF loading error
        console.error(reason);
    });

    }



    /**
     * Retrieves the text of a specif page within a PDF Document obtained through pdf.js
     *
     * @param {Integer} pageNum Specifies the number of the page
     * @param {PDFDocument} PDFDocumentInstance The PDF document obtained
     **/
    function getPageText(pageNum, PDFDocumentInstance) {
        // Return a Promise that is solved once the text of the page is retrieven
        return new Promise(function (resolve, reject) {
            PDFDocumentInstance.getPage(pageNum).then(function (pdfPage) {
                // The main trick to obtain the text of the PDF page, use the getTextContent method
                pdfPage.getTextContent().then(function (textContent) {
                    var textItems = textContent.items;
                    var finalString = "";

                    // Concatenate the string of the item to the final string
                    for (var i = 0; i < textItems.length; i++) {
                        var item = textItems[i];

                        finalString += item.str + " ";
                    }

                    // Solve promise with the text retrieven from the page
                    resolve(finalString);
                });
            });
        });
    }