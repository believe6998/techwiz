// Cấu Hình filebase


function doPostHelps(id) {

    navigator.geolocation.getCurrentPosition(showPosition);

    function showPosition(position) {
        db.collection("helps").add({
            longitude: position.coords.longitude,
            latitude: position.coords.latitude,
            userid: id,
            status: 0,
            time: new Date()
        }).then(function (docRef) {

        }).catch(function (error) {
            alert("Error adding document: ", error);
        });

        $.ajaxSetup({
            beforeSend: function() {
                $('#divloaded').hide();
                $('#divloading').show();
            },
            complete: function(){
                $('#divloading').hide();
                $('#divloaded').show();
            },
            success: function() {}
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            'url': '/help',
            'method': 'POST',
            'data': {
                'latitude': position.coords.latitude,
                'longitude': position.coords.longitude
            },
            success: function (response) {
                // alert("Helps Sended!")
            },
            error: function () {
            }
        });
    }
}


function doPostComplaints(id) {

    navigator.geolocation.getCurrentPosition(showPosition);

    function showPosition(position) {
        db.collection("complaints").add({
            latitude: position.coords.latitude,
            longitude: position.coords.longitude,
            title: $("#title").val(),
            type: $("#type").val(),
            userid: id,
            status: 0,
            time: new Date()
        }).then(function (docRef) {
            $('.modal-backdrop').remove();
            $('#complaintModal').modal('hide')
        }).catch(function (error) {

        });


        $.ajaxSetup({
            beforeSend: function() {
                $('#loadingDiv').hide();
            },
            complete: function(){
                $('#loadingDiv').show();
            },
            success: function() {}
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            'url': '/complaints',
            'method': 'POST',
            'data': {
                'latitude': position.coords.latitude,
                'longitude': position.coords.longitude,
                'title': position.coords.longitude,
                'type': position.coords.longitude
            },
            success: function (response) {

            },
            error: function () {

            }
        });
    }

}


