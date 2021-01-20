<?php

function init_pdfProcess() {
	echo '<script src="//cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
		<script>
		pdfjsLib.GlobalWorkerOptions.workerSrc = "//cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.min.js";
	</script>
	<script src="includes/pdf_uploader/init_pdfjs.js"></script>
	<script src="includes/pdf_uploader/file_upload.js"></script>
	';
}