<?php

use Codx\Comic\HomeController;

@get("/")
    @controller("HomeController@index")
@end

@get('/login')
    @controller("AuthController@login")
@end

