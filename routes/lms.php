<?php
//TODO: ENV editor route, and view must be defined in assistant

$router->view('/', 'lms.products.list')->middlware(Auth::class);

$router->post('/save-comment', function () {
    $data = [
        'courses' => \Ls\ClientAssistant\Apis\V1\LMS::lmsGetCourses(),
    ];

    extract($data);

    view('lms.course', $data);
});