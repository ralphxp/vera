<?php

@get("/")
    @controller("HomeController@index")
@end


@get('/login')
    @controller("AuthController@index")
@end

@get('/register')
    @controller("AuthController@register")
@end

@post('/logout')
    @controller("AuthController@logout")
@end

@post('/login')
    @controller("AuthController@attempt") 
@end

@post('/register/{step}')
    @controller("AuthController@create")
@end
@get('/register/{step}')
    @controller("AuthController@register")
@end


@auth
    @get('/home')
        @controller('HomeController@dashboard')
    @end

    @get('/passwords/change')
        @controller('AuthController@password')
    @end


    // houses routes
    @get('/houses')
        @controller('HouseController@index')
    @end

    // route to add a house
    @get('/houses/add')
        @controller('HouseController@add')
    @end
    @post('/houses/add')
        @controller('HouseController@store')
    @end

    // route to edit house
    @get('/houses/edit/{id}')
        @controller('HouseController@edit')
    @end

    @post('/houses/edit/{id}')
        @controller('HouseController@update')
    @end

    // CONTRACT ROUTES
    @get('/contracts')
        @controller('ContractController@index')
    @end

    // TENANT ROUTES
    @get('/tenants')
        @controller('TenantController@index')
    @end
    @get('/tenants/edit/{id}')
        @controller('TenantController@edit')
    @end
    @post('/tenants/edit/{id}')
        @controller('TenantController@update')
    @end
    @get('/tenants/contacts')
        @controller('TenantController@contact')
    @end
    @get('/tenants/in')
        @controller('TenantController@in')
    @end
    @get('/tenants/out')
        @controller('TenantController@out')
    @end

    // PAYMENT ROUTES
    @get('/payments')
        @controller('PaymentController@index')
    @end
    @get('/payments/edit/{id}')
        @controller('PaymentController@edit')
    @end
    @post('/payments/edit/{id}')
        @controller('PaymentController@update')
    @end

    // FORMS ROUTES
    @get('/m/tenants/out')
        @controller('FormController@out')
    @end
    @post('/m/tenants/out')
        @controller('FormController@storeOut')
    @end

    @get('/tenants/forms/out')
        @controller('FormController@out')
    @end
    @post('/tenants/forms/out')
        @controller('FormController@storeOut')
    @end



    // MESSAGE ROUTES
    @get('/messages')
        @controller('MessageController@index')
    @end

    // TENANT ROUTES
    @get('/personal')
        @controller('TenantController@account')
    @end
    @get('/me/contacts')
        @controller('TenantController@contact')
    @end
    @get('/me/payment')
        @controller('TenantController@payment')
    @end

    @get('/me/contract')
        @controller('TenantController@contract')
    @end

    @get('/me/forms/in')
        @controller('FormController@tenantIn')
    @end
    @get('/me/forms/out')
        @controller('FormController@tenantOut')
    @end
    @post('/me/forms/in')
        @controller('FormController@store')
    @end
    @post('/me/forms/out')
        @controller('FormController@store')
    @end

    // TENANT PAYMENT ROUTES 
    @get('/me/pay')
        @controller('PaymentController@tenantPay')
    @end
    @post('/me/pay')
        @controller('PaymentController@tenantPayStore')
    @end

    // MANAGER ROUTES
    @get('/m/payment/list')
        @controller('PaymentController@index')
    @end
@endauth