$(document).ready(function () {
    'use strict';
    window.id = 0;

    $('.repeater').repeater(
        {
            defaultValues: {
                'id': window.id,

            },
            show: function () {
                $(this).slideDown();
                console.log($(this).find('input')[1]);
                $('#cat-id').val(window.id);
            },
            hide: function (deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                    window.id--;
                    $('#cat-id').val(window.id);
                    $(this).slideUp(deleteElement);
                    console.log($('.repeater').repeaterVal());
                }
            },
            ready: function (setIndexes) {


            }
        }
    );

});

// $(document).ready(function(){  
//     $('#submit').click(function(){            
//         $.ajax({  
//             url:"confirm-prescription-add.php",  
//             method:"POST",  
//             data:$('#add_name').serialize(),  
//             success:function(data)  
//             {  
//                 alert(data);  
//                 $('#add_name')[0].reset();  
//             }  
//         });  
//     });  
// });  