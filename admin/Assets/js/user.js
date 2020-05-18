var user = {
    ajaxMethod: 'POST',

    add: function() {
        var formData = new FormData();

        formData.append('email', $('#formEmail').val());
        formData.append('password', $('#formPassword').val());
        formData.append('role', $('#formRole').val());

        $.ajax({
            url: '/admin/user/add/',
            type: this.ajaxMethod,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            beforeSend: function(){

            },
            success: function(result){
                console.log(result);
                window.location = '/admin/users/edit/'+result;
            }
        });
    },

    update: function() {
        var formData = new FormData();

        formData.append('id', $('#formUserId').val());
        formData.append('email', $('#formEmail').val());
        formData.append('password', $('#formPassword').val());
        formData.append('role', $('#formRole').val());

        $.ajax({
            url: '/admin/user/update/',
            type: this.ajaxMethod,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            beforeSend: function(){

            },
            success: function(result){
                console.log(result);
            }
        });
    },

    delete: function() {
        var formData = new FormData();

        formData.append('id', $('#userId').val());
        $.ajax({
            url: '/admin/user/delete/',
            type: this.ajaxMethod,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            beforeSend: function(){

            },
            success: function(result){
                console.log(result);
                window.location = '/admin/users/'
            }
        });
    },
};
console.log(user);