

// Edit Modal BD
$(document).ready(function(){
    $(document).on('click', '.deletebtn', function(){
        var product_id = $(this).val();

        $('#deleteModal').modal('show');
        $('#delete_id').val(product_id)


    });



    $(document).on('click', '.editbtn', function(){
        var product_id = $(this).val()

        $('#editModal').modal('show');

        $.ajax({
            type: "GET",
            url: "/events/edit/"+product_id,
            success: function(response){
                var date = new Date(response.product.date).toJSON().slice(0,10);

                $('#product_id1').val(response.product.id);
                $('#name1').val(response.product.name);
                $('#status1').val(response.product.status);
                $('#phone1').val(response.product.phone);
                $('#description1').val(response.product.description);
                $('#street1').val(response.product.Street);
                $('#number1').val(response.product.number);
                $('#district1').val(response.product.district);
                $('#city1').val(response.product.city);
                $('#value1').val(response.product.value);
                $('#date1').val(date);

            }
        });

    });

    $(document).on('click', '.showbtn', function(){
        var product_id = $(this).val()

        $('#showModal').modal('show');

        $.ajax({
            type: "GET",
            url: "/events/edit/"+product_id,
            success: function(response){
                var date = new Date(response.product.date).toJSON().slice(0,10);

                $('#detalhes_id').val(response.product.id);
                $('#nameshow').val(response.product.name);
                $('#statusshow').val(response.product.status);
                $('#phoneshow').val(response.product.phone);
                $('#descriptionshow').val(response.product.description);
                $('#streetshow').val(response.product.Street);
                $('#numbershow').val(response.product.number);
                $('#districtshow').val(response.product.district);
                $('#cityshow').val(response.product.city);
                $('#valueshow').val(response.product.value);
                $('#dateshow').val(date);

            }
        });

    });
});

// Show Modal BD
$(document).ready(function(){
    $(document).on('click', '.showbtn', function(){
        var product_id = $(this).val()

        $('#showModal').modal('show');

        $.ajax({
            type: "GET",
            url: "/events/"+product_id,
            success: function(response){
                console.log(response);
            }
        });

    });
});

//search

document.getElementById('bairro_id').addEventListener('change', function() {
    this.form.submit();
});

document.getElementById('data_id').addEventListener('change', function() {
    this.form.submit();
});





