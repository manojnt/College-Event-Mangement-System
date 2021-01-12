$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" style="border-radius:1.5rem;" placeholder="Enter Name" name="name' + counter + '" required /></td>';
		cols += '<td><input type="text" class="form-control" style="border-radius:1.5rem;" placeholder="Enter Name" name="usn' + counter + '" required/></td>';
        cols += '<td><input type="text" class="form-control" style="border-radius:1.5rem;" placeholder="Enter Name" name="mail' + counter + '" required/></td>';
        cols += '<td><input type="text" class="form-control" style="border-radius:1.5rem;" placeholder="Enter Name" name="phone' + counter + '" required/></td>';
        cols += '<td><input type="text" class="form-control" style="border-radius:1.5rem;" placeholder="Enter Name" name="department' + counter + '" required/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
		$("#count").val(counter);
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1;
		$("#count").val(counter);
    });


});
