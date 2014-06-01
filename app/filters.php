<?php
Route::filter('cumpleanos', function() {
    if (date('d/m') == '31/05') {
        return View::make('cumpleanos');
    }
});
