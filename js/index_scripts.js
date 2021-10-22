
              $(function(){
                $('#register').click(function(e){

                    var valid = this.form.checkValidity();
                    if(valid){

                        var email = $('#emailr').val();
                        var birthday = $('#birthdayr').val();
                        var tel = $('#telr').val();
                        var login = $('#loginr').val();
                        var pass = $('#passr').val();

                        e.preventDefault();
                        $.ajax({
                            type: 'POST',
                            url: 'process.php',
                            data: {email:email,birthday:birthday,tel:tel,login:login,pass:pass},
                            success: function(data){
                                if($.trim(data)==="1"){
                                    swal.fire({
                                        icon:'success',
                                        title:'Успіх',
                                        text: 'Ви успішно зареєстровані!',
                                    })
                                    $('#register_form')[0].reset();
                                    $('#show_registr').prop('checked', false);
                                }
                                else if($.trim(data)==="0"){
                                    swal.fire({
                                        icon:'error',
                                        title:'Помилка',
                                        text: 'Перевірте коректність введених даних',
                                    })
                                }
                                else if($.trim(data)==="3"){
                                    swal.fire({
                                        icon:'error',
                                        title:'Помилка',
                                        text: 'Email, або логін та пароль вже зайняті',
                                    })
                                }
                            },
                            error: function(data){
                                swal.fire({
                                    icon:'error',
                                    title:'Помилка',
                                    text: 'Перевірте коректність введених даних',
                                })
                            }
                        });
                    }else{
                        
                    }
                })
              });
              $(function(){
                    $('#log_in').click(function(e){
                        var valid = this.form.checkValidity();
                        if(valid){
                            var ulogin = $('#login').val();
                            var upass = $('#pass').val();

                            e.preventDefault();
                            $.ajax({
                                type:'POST',
                                url:"jslogin.php",
                                data:{login:ulogin, pass:upass},
                                success: function(data){
                                    if($.trim(data)==="1"){
                                        swal.fire({
                                            icon:'success',
                                            title:'Вітаємо!',
                                            text: "Ви успішно увійшли!",
                                        })
                                        setTimeout('window.location.href = "index_login.php"', 2000);
                                    }
                                    else{
                                        swal.fire({
                                            icon:'error',
                                            title:'Помилка!',
                                            text: "Перевірте коректність введених даних!",
                                        })
                                    }
                                },
                                error: function(data){
                                    swal.fire({
                                    icon:'error',
                                    title:'Помилка',
                                    text: 'Під час виконання запиту виникла помилка'
                                })
                                }
                            });
                        }else{

                        }
                        
                    });
              });

                $(document).ready(function() {
                        $('#autoWidth,#autoWidtw2').lightSlider({
                            autoWidth:true,
                            loop:true,
                            onSliderLoad: function() {
                                $('#autoWidth,#autoWidtw2').removeClass('cS-hidden');
                            } 
                        });  
                });



                $(function(){
                    $('#update').click(function(e){
                        var valid = this.form.checkValidity();
                        if(valid){
                            
                            var email = $('#emailr1').val();
                            var birthday = $('#birthdayr1').val();
                            var tel = $('#telr1').val();
                            var login = $('#loginr1').val();
                            var pass = $('#passr1').val();
                            var old_pass = $('#lastpassr').val();
    
                            e.preventDefault();
                            $.ajax({
                                type: 'POST',
                                url: 'update.php',
                                data: {email:email,birthday:birthday,tel:tel,login:login,pass:pass,old_pass:old_pass},
                                success: function(data){
                                    if($.trim(data)==="1"){
                                        swal.fire({
                                            icon:'success',
                                            title:'Успіх',
                                            text: 'Дані успішно змінені!',
                                        })
                                        setTimeout('location.reload()',1500);
                                    }
                                    else if($.trim(data)==="0"){
                                        swal.fire({
                                            icon:'error',
                                            title:'Помилка',
                                            text: 'Перевірте коректність введених даних',
                                        })
                                    }
                                    else if($.trim(data)==="3"){
                                        swal.fire({
                                            icon:'error',
                                            title:'Помилка',
                                            text: 'Email, або логін та пароль вже зайняті',
                                        })
                                    }
                                    else if($.trim(data)==="pass_error"){
                                        swal.fire({
                                            icon:'error',
                                            title:'Помилка',
                                            text: 'Паролі не співпадають',
                                        })
                                    }
                                },
                                error: function(data){
                                    swal.fire({
                                        icon:'error',
                                        title:'Помилка',
                                        text: 'Перевірте коректність введених даних',
                                    })
                                }
                            });
                        }else{
                            
                        }
                    })
                    
                  });
                  $(document).on('click', '#del_btn', function () {
                    var here = this;
                    Swal.fire({
                        title: 'Ви впевнені?',
                        text: "Ви не зможете відмінити цю операцію!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        cancelButtonText:'Відмінити',
                        confirmButtonText: 'Так, видалити цей білет!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            var seats_id = $(this).parents('tr').attr('id');
                            $.ajax({
                                type: 'POST',
                                url: 'del_ticket.php',
                                data: {id_seats:seats_id},
                                success: function(data){
                                    if($.trim(data)==="1"){
                                        $(here).parents('tr').fadeOut();
                                    }
                                    else{
                                        swal.fire({
                                            icon:'error',
                                            title:'Помилка',
                                            text: 'Під час видалення виникла помилка!',
                                        })
                                    }
                                },
                                error: function(data){
                                    swal.fire({
                                        icon:'error',
                                        title:'Помилка',
                                        text: 'Під час видалення виникла помилка!',
                                    })
                                }
                            });
                        }
                      })
                    
                });
                        
                        