<?php
/*
 * Template Containers
 */

if ( $id==889 ) {
    // get cf7 form data
    $submission = WPCF7_Submission::get_instance();
    $posted_data = $submission->get_posted_data();

    // define consts and vars
    $dir_upload = get_template_directory() . '/phpword/';
    define( 'DOCUMENT_FILE_PATH', $dir_upload );
    $tmplFilepath = DOCUMENT_FILE_PATH . 'resources/porucheniye_container_perevozka.docx';
    $orderNum = 'kts-' . rand(9999, 99999);
    $newFileName = 'porucheniye_' . $orderNum . '_container_perevozka_' . date("d-m-y-H-i-s") . '.docx';
    $downloadFilepath = DOCUMENT_FILE_PATH . $newFileName;
    $saveFilepath = DOCUMENT_FILE_PATH . 'documents/' . $newFileName;

    // load document template
    $PHPWord = new PHPWord();
    $document = $PHPWord->loadTemplate( $tmplFilepath  );

    // form data formating
    if ($posted_data['city-1']) { $city_1 = $posted_data['city-1']; }

    // value substitution
    $document->setValue('d_num', $orderNum); //номер документа

    // document save
    $document->save( $downloadFilepath );
    copy( $downloadFilepath, $saveFilepath );

    // attach document
    $submission->add_uploaded_file( 'document_docx', $downloadFilepath );
}
