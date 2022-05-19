<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" class=" js cssanimations">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Manage MV/Video - CloudData</title>

    <!-- START CORE PLUGINS -->
    <script src="./assets/jquery-1.12.4.min.js.download" type="text/javascript"></script>
    <script src="./assets/jquery-ui.min.js.download" type="text/javascript"></script>
    <script src="./assets/bootstrap.min.js.download" type="text/javascript"></script>
    <script src="./assets/metisMenu.min.js.download" type="text/javascript"></script>
    <script src="./assets/lobipanel.min.js.download" type="text/javascript"></script>
    <script src="./assets/animsition.min.js.download" type="text/javascript"></script>
    <script src="./assets/fastclick.min.js.download" type="text/javascript"></script>
    <script src="./assets/exec.js.download" type="text/javascript"></script>
    <script src="./assets/jquery.tokeninput.js.download" type="text/javascript"></script>


    <!-- End ckeditor && ckfinder -->
    <script language="javascript" type="text/javascript" src="./assets/tinymce.js.download"></script>
    <!-- STATRT GLOBAL MANDATORY STYLE -->
    <link href="./assets/base.css" rel="stylesheet" type="text/css">
    <!-- START PAGE LABEL PLUGINS -->
    <link href="./assets/modal-component.css" rel="stylesheet" type="text/css">
    <!-- START THEME LAYOUT STYLE -->
    <link href="./assets/component_ui.min.css" rel="stylesheet" type="text/css">
    <link id="defaultTheme" href="./assets/skin-dark-1.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/custom.css" rel="stylesheet" type="text/css">

    <!-- START PAGE LABEL PLUGINS -->
    <link href="./assets/demo.css" rel="stylesheet" type="text/css">
    <link href="./assets/ns-default.css" rel="stylesheet" type="text/css">
    <link href="./assets/ns-style-growl.css" rel="stylesheet" type="text/css">
    <link href="./assets/ns-style-attached.css" rel="stylesheet" type="text/css">
    <link href="./assets/ns-style-bar.css" rel="stylesheet" type="text/css">
    <link href="./assets/ns-style-other.css" rel="stylesheet" type="text/css">
    <link href="./assets/sweetalert.css" rel="stylesheet" type="text/css">
    <link href="./assets/toastr.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="./assets/icon-title.png" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style media="screen" type="text/css">
        .table>tbody>tr>td {
            border-top: 0 solid #e4e5e7!important;
        }
        
        label {
            font-weight: normal!important;
        }
        
        input {
            vertical-align: baseline;
        }
        
        .error {
            color: red;
            position: relative;
            bottom: 0;
            left: 0px;
            padding-left: 10px;
            text-indent: -9999px;
            border: 1px solid #a94442;
        }
        
        label.error {
            display: none !important;
        }
    </style>

    <!--validate form-->
    <script type="text/javascript" src="./assets/jquery.validate.min.js.download"></script>
    <script src="./assets/moment-with-locales.js.download" type="text/javascript"></script>
    <script src="./assets/bootstrap-datetimepicker.min.js.download" type="text/javascript"></script>
    <link href="./assets/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css">
    <script src="./assets/bootstrap-dialog.js.download"></script>
    <!-- DataTables JavaScript -->
    <script src="./assets/jquery-filestyle.js.download" type="text/javascript"></script>
    <link href="./assets/jquery-filestyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./assets/jquery.dataTables.css">
    <script type="text/javascript" language="javascript" src="./assets/jquery.dataTables.min.js.download"></script>
    <script type="text/javascript" language="javascript" src="./assets/dataTables.responsive.min.js.download"></script>

    <script type="text/javascript">
        $('.progress').hide();

        function filterGlobal() {
            $('#tb_song').DataTable().search(
                $('#global_filter').val()
            ).draw();
        }

        function filterColumn(i) {
            $('#tb_song').DataTable().column(i).search(
                $('#col' + i + '_filter').val()
            ).draw();
        }

        $(document).ready(function() {
            $(':file').jfilestyle({
                input: false,
                buttonText: '<span class="glyphicon glyphicon-folder-open"></span>'
            });

            //datetime picker
            $('#dt_date_release,[name=date_release]').datetimepicker({
                format: 'DD-MM-YYYY'
            });

            /*
             Tim kiem thong tin casi| nhac si
             */
            $("#f_singer_id").tokenInput("/ajax/search?type=customer&cus_type=1", {
                contentType: "json",
                method: 'POST',
                queryParam: 'keyword',
                preventDuplicates: true,
                tokenLimit: 10,
                hintText: "Nhập tên Ca sĩ",
                propertyToSearch: "fullName",
                onResult: function(results) {
                    results = results["data"];
                    return results;
                },
                onAdd: function(item) {
                    $("#customer_id").val(item.id);
                    $("#name").html(item.fullName);
                    $("#nickname").html(item.nickName);
                    $("#address").html(item.address);
                    $("#phone").html(item.phone);
                },
                onDelete: function(item) {
                    $("#customer_id").val(0);
                    $("#name").html("");
                    $("#nickname").html("");
                    $("#address").html("");
                    $("#phone").html("");
                },
                resultsFormatter: function(item) {
                    var cusName = item.nickName;
                    if (cusName == undefined) {
                        cusName = item.fullName;
                    }
                    var fullname = item.fullName;
                    var customer = "<li>" + "<img src='" + RESOURCE_URL + "images/" + item.avatar + "' title='" + cusName + " " + cusName + "' height='25px' width='25px' />" + "<div style='display: inline-block; padding-left: 10px;'><div class='full_name'>" + cusName + " / " + fullname + "</div></div></li>";
                    return customer;
                },
                tokenFormatter: function(item) {
                    var cusName = item.nickName;
                    if (cusName == undefined) {
                        cusName = item.fullName;
                    }
                    return "<li><p>" + cusName + "</p></li>";
                }
            });

            /*
             Tim kiem thong tin casi| nhac si
             */
            $("#f_artist_id").tokenInput("/ajax/search?type=customer&cus_type=1", {
                contentType: "json",
                method: 'POST',
                queryParam: 'keyword',
                preventDuplicates: true,
                tokenLimit: 10,
                hintText: "Nhập tên Nhạc sĩ",
                propertyToSearch: "fullName",
                onResult: function(results) {
                    results = results["data"];
                    return results;
                },
                onAdd: function(item) {
                    $("#customer_id").val(item.id);
                    $("#name").html(item.fullName);
                    $("#nickname").html(item.nickName);
                    $("#address").html(item.address);
                    $("#phone").html(item.phone);
                },
                onDelete: function(item) {
                    $("#customer_id").val(0);
                    $("#name").html("");
                    $("#nickname").html("");
                    $("#address").html("");
                    $("#phone").html("");
                },
                resultsFormatter: function(item) {
                    var cusName = item.nickName;
                    if (cusName == undefined) {
                        cusName = item.fullName;
                    }
                    var fullname = item.fullName;
                    var customer = "<li>" + "<img src='" + RESOURCE_URL + "images/" + item.avatar + "' title='" + cusName + " " + cusName + "' height='25px' width='25px' />" + "<div style='display: inline-block; padding-left: 10px;'><div class='full_name'>" + cusName + " / " + fullname + "</div></div></li>";
                    return customer;
                },
                tokenFormatter: function(item) {
                    var cusName = item.nickName;
                    if (cusName == undefined) {
                        cusName = item.fullName;
                    }
                    return "<li><p>" + cusName + "</p></li>";
                }
            });

            /*
             Show dialog thong tin bài hát
             */
            $('#modal-lg').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var addend_id = button.data('addend_id');
                var modal = $(this);
                var song_id = button.data('song_id');

                var rowIndex = button.data('row_id');
                var data = null;
                if (null !== rowIndex && undefined !== rowIndex) {
                    data = table.row(rowIndex).data();
                }
                var list = "0,2,4,0,3,7";
                var isdAvanceEdit = list.indexOf("15") != -1 ? true : false;
                modal.find("#btn_save").prop("disabled", false);
                if (data != null && isdAvanceEdit === false && undefined !== data.listSongRight && null !== data.listSongRight) {
                    var songQLQ = data.listSongRight[0].relatedRight;
                    var songQTG = data.listSongRight[0].copyRight;
                    if (songQLQ !== 0 || songQTG !== 0) {
                        modal.find("#btn_save").prop("disabled", true);
                    }
                }

                modal.find('.modal-title');

                $("#f_singer_id").tokenInput("clear");
                $("#f_artist_id").tokenInput("clear");
                $("#f_tag_ids").tokenInput("clear");
                $("#listKey").empty();
                modal.find("#group_image_song").empty();

                if (song_id > 0) {
                    $.ajax({
                        type: "POST",
                        url: ROOT_URL + "/ajax/getSongById",
                        data: {
                            songId: song_id
                        },
                        success: function(data) {
                            var songItem = data["data"];
                            modal.find("[name=song_name]").val(songItem.name);
                            modal.find("[name=song_id]").val(song_id);
                            modal.find("[name=song_key]").val(songItem.songKey);
                            modal.find("[name=singer_id]").val(songItem.singerId);
                            modal.find("[name=artist_id]").val(songItem.artistId);
                            modal.find("[name=nct_key]").val(songItem.partnerKey);
                            modal.find("[name=date_release]").val(songItem.dateRelease);
                            modal.find("[name=title_release]").val(songItem.titleRelease);
                            modal.find("[name=version]").val(songItem.version);
                            modal.find("[name=select_genre]").val(songItem.genreId);
                            modal.find("[name=select_country]").val(songItem.countryId);

                            if (songItem.qlq == 1) {
                                modal.find("#rd-qlq").prop("checked", true);
                            } else {
                                modal.find("#rd-qlq").prop("checked", false);
                            }
                            if (songItem.qtg == 1) {
                                modal.find("#rd-qtg").prop("checked", true);
                            } else {
                                modal.find("#rd-qtg").prop("checked", false);
                            }
                            modal.find("[name=link_stream]").val(songItem.linkStream);
                            modal.find("#last_updated").html(data["last_updated"]);
                            modal.find("#created_by").html(data["created_by"]);
                            modal.find("#image_song").val(songItem.image);

                            if ($('#image_song').val().length > 0) {


                                var src = IMAGE_URL + "/news/" + songItem.image;
                                var img = $('<img src="' + src + '" />');
                                img.css('width', '100px');

                                $('#group_image_song').append(img);
                                $('#group_image_song').append($('<i class="fa fa-times remove-image" aria-hidden="true"></i>').css('cursor', 'pointer').on('click', function() {
                                    $(this).parent().find('img').remove();
                                    $('#image_song').val('');
                                    $(this).remove();
                                    $('#image_song').val("");
                                }));
                            }

                            switch (songItem.type) {
                                case "AUDIO":
                                    modal.find("#rd-radio-song").prop("checked", true);
                                    break;
                                case "MV":
                                    modal.find("#rd-radio-mv").prop("checked", true);
                                    break;
                                case "VIDEO":
                                    modal.find("#rd-radio-video").prop("checked", true);
                                    break;
                                case "BEAT":
                                    modal.find("#rd-radio-beat").prop("checked", true);
                                    break;
                                default:
                                    modal.find("#rd-radio-song").prop("checked", true);
                                    break;
                            }

                            $.ajax({
                                type: "POST",
                                url: ROOT_URL + "/ajax/search",
                                data: {
                                    keyword: songItem.singerId,
                                    type: "customer_id"
                                },
                                success: function(data) {
                                    var singerItem = data["data"][0];

                                    for (j = 0; j < data["data"].length; j++) {
                                        singerItem = data["data"][j];
                                        $("#f_singer_id").tokenInput("add", {
                                            id: singerItem.id,
                                            fullName: singerItem.nickName
                                        });
                                    }
                                }
                            });

                            $.ajax({
                                type: "POST",
                                url: ROOT_URL + "/ajax/search",
                                data: {
                                    keyword: songItem.artistId,
                                    type: "customer_id"
                                },
                                success: function(data) {
                                    var artistItem = data["data"][0];
                                    for (j = 0; j < data["data"].length; j++) {
                                        artistItem = data["data"][j];
                                        $("#f_artist_id").tokenInput("add", {
                                            id: artistItem.id,
                                            fullName: artistItem.nickName
                                        });
                                    }
                                }
                            });

                            //load tags
                            $.ajax({
                                type: "POST",
                                url: ROOT_URL + "/ajax/search_v1?type=get_tags",
                                data: {
                                    tag_ids: songItem.tags
                                },
                                success: function(data) {
                                    if (data["data"] == null) {
                                        return;
                                    }
                                    var tagItem = data["data"][0];
                                    for (j = 0; j < data["data"].length; j++) {
                                        tagItem = data["data"][j];
                                        $("#f_tag_ids").tokenInput("add", {
                                            id: tagItem.id,
                                            name: tagItem.name
                                        });
                                    }
                                }
                            });
                        }
                    });
                } else {
                    modal.find("[name=song_name]").val("");
                    modal.find("[name=song_id]").val(0);
                    modal.find("[name=song_key]").val("");
                    modal.find("[name=singer_id]").val(0);
                    modal.find("[name=artist_id]").val(0);
                    modal.find("#rd-qlq").prop("checked", false);
                    modal.find("#rd-qtg").prop("checked", false);
                    modal.find("[name=nct_key]").val("");
                    modal.find("[name=link_stream]").val("");
                    modal.find("[name=nct_key]").val("");
                    modal.find("[name=date_release]").val("");
                    modal.find("[name=title_release]").val("");
                    modal.find("[name=version]").val("");
                    modal.find("[name=select_genre]").val(0);
                    modal.find("[name=select_country]").val(0);
                    modal.find("#last_updated").html("");
                    modal.find("#image_song").val("");
                }
            });

            var list = "0,2,4,0,3,7";
            var isRole = (list.indexOf("2") != -1 ? true : false);
            var isDelete = list.indexOf("1") != -1 ? true : false;
            var isdAvanceEdit = list.indexOf("15") != -1 ? true : false;
            //table load data list song
            var table = $('#tb_song').DataTable({
                "stateSave": false,
                "processing": true,
                "serverSide": true,
                "length": 2,
                "ajax": {
                    "url": "http://copyright.skymusic.com.vn/ajax/search?type=get_list_song_v1",
                    "method": "POST"
                },
                "columnDefs": [{
                    "className": "dt-left",
                    "targets": [0, 3]
                }, {
                    "className": "dt-center",
                    "targets": [6, 3]
                }, {
                    "className": "dt-center",
                    "targets": [7, 3]
                }, {
                    "className": "dt-center",
                    "targets": [8, 3]
                }],
                "lengthMenu": [
                    [20, 40, 50, 100],
                    [20, 40, 50, 100]
                ],
                "order": [
                    [1, "desc"]
                ],
                "columns": [{
                    "data": "id",
                    "name": "id",
                    "orderable": false,
                    "render": function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                }, {
                    "data": "songKey",
                    "name": "song_key",
                    "orderable": false
                }, {
                    "data": "orderCode",
                    "name": "orderCode",
                    "orderable": false,
                    "render": function(data, type, row, meta) {
                        return data;
                    }
                }, {
                    "data": "songName",
                    "name": "song_name",
                    "orderable": false,
                    "render": function(data, type, row, meta) {
                        var songname = data;
                        var type = "";
                        var color = "";
                        switch (row["type"]) {
                            case 1:
                                type = "<i class='material-icons' style='vertical-align:middle;' title='Song'></i>";
                                break;
                            case 2:
                                type = "<i class='material-icons' style='vertical-align:middle;' title='Beat'></i>";
                                break;
                            case 3:
                                type = "<i class='material-icons' style=vertical-align:middle;' title='MV'>video_library</i>";
                                break;
                            case 4:
                                type = "<i class='material-icons' style=vertical-align:middle;' title='Video'></i>";
                                break;
                        }
                        if (row["isTrusted"]) {
                            type = "<span class='fa fa-copyright fa-1' style='color: #dd4b39; margin-right: 3px;' title='Bài hát độc quyền'></span>";
                        }
                        songname = type + "<a href='" + row["linkstream"] + "' target='_blank' title='Play the MV " + row["songName"] + "'>" + row["songName"] + "</a>";
                        return songname;
                    }
                }, {
                    "data": "singerName",
                    "name": "singer_id",
                    "orderable": false
                }, {
                    "data": "artistName",
                    "name": "artist_id",
                    "orderable": false
                }, {
                    "data": "qlq",
                    "name": "qlq",
                    "orderable": false,
                    "render": function(data, type, row, meta) {
                        var qlq = "";
                        if (data == 1) {
                            qlq = "<input tabindex='71' type='checkbox' checked='check' disabled='true'/>";

                            var icon = "icon-verify.png";
                            var title = "Record's Contract Still valid";
                            var lstRight = row["listSongRight"];
                            for (i = 0; i < lstRight.length; i++) {
                                var right = lstRight[i]["relatedRight"];
                                var isExpired = lstRight[i]["isExpired"];
                                var dateEnd = lstRight[i]["dateEnd"];

                                if (right == 1) {
                                    if (isExpired) {
                                        icon = "icon-warning.png";
                                        title = "Record's Contract Expired. Expiration Date " + dateEnd;
                                    } else {
                                        title += ". Expiration Date " + dateEnd;
                                    }
                                    break;
                                }
                            }
                            qlq += " <img id='img_icon' src='" + RESOURCE_URL + "images/" + icon + "' width='15' style='vertical-align:sub!important' title='" + title + "' />";
                        } else {
                            qlq = "<input tabindex='71' type='checkbox' disabled='true' style='margin-right:15px;'/>";
                        }
                        return qlq;
                    }
                }, {
                    "data": "qtg",
                    "name": "qtg",
                    "orderable": false,
                    "render": function(data, type, row, meta) {
                        var qtg = "";
                        if (data == 1) {
                            qtg = "<input tabindex='71' type='checkbox' checked='check' disabled='true'/>";

                            var icon = "icon-verify.png";
                            var title = "Record's Contract Still valid";
                            var lstRight = row["listSongRight"];
                            for (i = 0; i < lstRight.length; i++) {
                                var right = lstRight[i]["relatedRight"];
                                var isExpired = lstRight[i]["isExpired"];
                                var dateEnd = lstRight[i]["dateEnd"];

                                if (right == 1) {
                                    if (isExpired) {
                                        icon = "icon-warning.png";
                                        title = "Record's Contract Expired. Expiration Date " + dateEnd;
                                    } else {
                                        title += ". Ngày hết hạn " + dateEnd;
                                    }
                                    break;
                                }
                            }
                            qtg += " <img id='img_icon' src='" + RESOURCE_URL + "images/" + icon + "' width='15' style='vertical-align:sub!important' title='" + title + "' />";
                        } else {
                            qtg = "<input tabindex='71' type='checkbox' disabled='true' style='margin-right:15px;'/>";
                        }
                        return qtg;
                    }
                }, {
                    "data": "linkstream",
                    "orderable": false,
                    "render": function(data, type, row, meta) {

                        var action = "";
                        if (isRole) {
                            if (isDelete) {
                                if (row["orderCode"] == "") {
                                    var icon = "fa fa-trash-o";
                                    var title = "Xóa bài hát";
                                    if (row["status"] == 1) {
                                        icon = "fa fa-undo";
                                        title = "Restore bài hát";
                                    }
                                    action += '<a href="javascript:;" id="bt_del_song" data-toggle="Delete Record" data-placement="right" title="' + title + '" song-id="' + row["id"] + '"><i  class=" ' + icon + '" aria-hidden="true" ></i></a>';
                                } else {
                                    action += '<a href="javascript:;" song-id="' + row["id"] + '" style="color:silver;border-color:silver"><i class="fa fa-trash-o" aria-hidden="true" ></i></a>';
                                }
                            }
                            action += ' <a href="javascript:;" data-toggle="modal" data-target="#modal-upload" data-placement="left" title="Upload Record File" data-song_id="' + row["id"] + '" data-song_key="' + row["songKey"] + '"><i class="fa fa-upload" aria-hidden="true" ></i></a>';

                            action += ' <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit Record File" data-song_id="' + row["id"] + '" data-row_id="' + meta.row + '"><i class="fa fa-pencil" aria-hidden="true" ></i></a>';
                        } else {
                            action += "    <a href='javascript:;' data-toggle='modal'  data-placement='left' title='' style='color:silver;border-color:silver'><i class='fa fa-pencil' aria-hidden='true' ></i></a>"
                        }

                        return action;
                    }
                }],
                language: {
                    emptyTable: "No Result!",
                    processing: "Searching...",
                    search: "Search",
                    sInfo: "Result from _START_ to _END_ of _TOTAL_ results",
                    sLengthMenu: "Showcase  _MENU_"
                }
            });


            //del song
            $('#tb_song tbody').on('click', '#bt_del_song', function() {
                if ($(this).attr("id") != "bt_del_song") {
                    return;
                }
                var tr = $(this).closest('tr');
                var row = table.row(tr);
                var songId = row.data().id;
                var status = row.data().status;
                var action = "res";
                var orderId = row.data().orderCode;
                var msg = "Bạn có muốn restore bài hát này không ?";
                if (status == 0) {
                    action = "del";
                    msg = "Bạn có muốn xóa bài hát này không ?";
                }
                var cfm = confirm(msg);
                if (cfm) {
                    $.ajax({
                        type: "POST",
                        url: ROOT_URL + "/ajax/action",
                        data: {
                            song_id: songId,
                            type: "song",
                            action: action
                        },
                        success: function(data) {
                            toastr.info(data.msg);
                            setTimeout(function() {
                                window.location.reload();
                            }, 1000);
                        }
                    });
                };
            });

            //search ten bai hat
            $('input.global_filter').on('keydown', function(e) {
                if (e.which == 13) {
                    e.preventDefault();
                    filterGlobal();
                }
            });

            //search ca si | nhac si
            $('input.column_filter').on('keydown', function(e) {
                if (e.which == 13) {
                    e.preventDefault();
                    filterColumn($(this).parents('div').attr('data-column'));
                }
            });

            $('input[type=text]').on('keydown', function(e) {
                if (e.which == 13) {
                    e.preventDefault();
                    var id = $(this).attr('id');
                    if (id == "f1-name") {
                        $("#btn_save").click();
                    }
                }
            });

            //search NCT Key
            $("#search_nct_key").click(function() {
                var value = $("#f1-name").val();
                var singer = $(".token-input-list>li>p").html();

                $.ajax({
                    type: "POST",
                    url: "/ajax/getNCTKey",
                    data: {
                        song_name: value + " - " + singer
                    },
                    success: function(data) {
                        var response = data["data"];
                        if (data["status"] == 'true') {
                            var i;
                            $("#listKey").empty();
                            for (i = 0; i < Math.min(response.length, 5, 5); i++) {
                                var nctKey = response[i]["key"];
                                var name = response[i]["title"];
                                var streamURL = response[i]["streamUrl"];
                                var artist = response[i]["artists"][0];

                                var link = '<li><a href="' + streamURL + '" target="_blank">' + nctKey + " - " + name + " - " + artist + '</a> - <a href=javascript:addNCTKey("' + nctKey + '")><i class="fa fa-plus-circle add added" aria-hidden="true" title="Chọn update NCT Key"></i></a></li>';
                                $("#listKey").append(link);
                            }
                        } else {
                            BootstrapDialog.alert(response.data);
                        }
                    }
                });
            });

            //search tags
            /*
             Tim kiem thong tin tags
             */
            $("#f_tag_ids").tokenInput("/ajax/search_v1?type=get_tags", {
                contentType: "json",
                method: 'POST',
                queryParam: 'keyword',
                preventDuplicates: true,
                tokenLimit: 10,
                hintText: "Nhập tên tags",
                propertyToSearch: "name",
                onResult: function(results) {
                    results = results["data"];
                    return results;
                },
                onAdd: function(item) {
                    $("#tag_ids").val(item.id);
                },
                onDelete: function(item) {
                    $("#tag_ids").val(0);
                },
                resultsFormatter: function(item) {
                    var name = item.name;

                    var tags = "<li><p class='name'>" + name + "</p></li>";
                    return tags;
                },
                tokenFormatter: function(item) {
                    var name = item.name;

                    return "<li><p>" + name + "</p></li>";
                }
            });
            //upload image
            $("#file_image").change(function() {
                $('#id_image_url').attr("src", "");
                var file = document.getElementById('file_image');
                var type = "news";
                if (file === null || file === undefined) {
                    return;
                }
                var data = new FormData();
                data.append("fileupload", file.files[0]);
                data.append("type", type);

                $.ajax({
                    url: "/news/upload",
                    type: "post",
                    dataType: "json",
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data !== null && data !== undefined && data.map.imageUrl !== undefined && data.map.imageUrl != null && data.map.imageUrl != "") {
                            imageSongPreview(data);
                        } else {
                            $('#upload_url').val("");
                        }
                    },
                    error: function() {
                        $('#upload_url').val("");
                    }
                });
            });
            //end upload

            /*
             Show dialog upload
             */
            $("form#uploadform").attr("enctype", "multipart/form-data").attr("encoding", "multipart/form-data");
            $('#modal-upload').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var song_id = button.data('song_id');
                var song_key = button.data('song_key');

                if (song_id > 0) {
                    $('#modal-upload #song_id').val(song_id);
                    $("[name=song_name]").html("");
                    $("[name=singer]").html("");
                    $("[name=artist]").html("");
                    $("[name=upload_status]").html("");
                    $("[name=status]").val(0);

                    //load info
                    $.ajax({
                        type: "GET",
                        url: ROOT_URL + "/uiza-upload/getBySongKey",
                        data: {
                            song_key: song_key
                        },
                        success: function(data) {
                            var response = JSON.parse(data);
                            var songItem = response.data;
                            if (songItem == null) {
                                return;
                            }

                            $("[name=song_name]").html(songItem.songName);
                            $("[name=singer]").html(songItem.singerName);
                            $("[name=artist]").html(songItem.artistName);
                            if (songItem.partnerKey != null) {
                                $("[name=status]").val(songItem.status);
                                switch (songItem.status) {
                                    case 0:
                                        $("[name=upload_status]").html("Thành công");
                                        break;
                                    case 1:
                                        $("[name=upload_status]").html("Đang xử lý");
                                        break;
                                    case 2:
                                        $("[name=upload_status]").html("Không hợp lệ");
                                        break;
                                }
                            } else {
                                $("[name=upload_status]").html("Chưa upload");
                            }
                        }
                    });
                }
            });
        });

        var imageSongPreview = function(data) {
            var groupElm = $('#group_image_song');
            var songElm = $('#image_song');

            groupElm.find('.remove-image').remove();
            groupElm.find('img').remove();

            if (data == null) {
                return;
            }

            var src = data.map.imageUrl;

            var img = $('<img src="' + src + '" />');
            img.css('width', '100px');

            groupElm.append(img);
            groupElm.append($('<i class="fa fa-times remove-image" aria-hidden="true"></i>').css('cursor', 'pointer').on('click', function() {
                $(this).parent().find('img').remove();
                songElm.val('');
                $(this).remove();
            }));
            songElm.val(data.map.fileName);
        };

        function sendSaveData(action) {
            $('#btn_save').prop("disabled", true);
            setTimeout(function() {
                $('#btn_save').prop("disabled", false);
            }, 5000);

            $("#mainform #f1-name").valid();
            $("#mainform #f_singer_id").valid();
            $("#mainform #f_artist_id").valid();
            //alert($("#f_singer_id").val());
            var songId = $("#mainform").find("[name=song_id]").val();
            if ($("#f1-name").val() == "" || $("#f_singer_id").val() == "0" || $("#f_artist_id").val() == "0") {
                return;
            }

            if (songId > 0) {
                action = "savePageSong";
            } else {
                action = "insertPageSong";
            }

            var cfm = confirm('Bạn có muốn lưu tất cả thông tin này không ?');
            if (cfm) {
                $.ajax({
                    type: "POST",
                    url: "/song/" + action,
                    data: $("#mainform").serialize(),
                    success: function(data) {
                        var response = JSON.parse(data);
                        if (response.status == 'true') {
                            toastr.info('Lưu thông tin thành công!');
                            $("#modal-lg .btn-danger").click();
                        } else {
                            BootstrapDialog.alert(response.data);
                        }
                    }
                });
            };
        };

        function addNCTKey(nctKey) {
            $("[name=nct_key]").val(nctKey);
        }

        /*
         Upload
         */

        function uploadFile() {
            var file = $('#file_upload')[0].files[0];
            if (file === undefined) {
                return;
            }
            var song_id = $('#modal-upload #song_id').val();
            var upload_status = $('#modal-upload #status').val();
            var fd = new FormData();
            fd.append('files', file);
            $('#btn_upload').prop("disabled", true);

            if (upload_status > 0) {
                BootstrapDialog.confirm('Record Successfully Uploaded. Do you want to continue to Upload Record?', function(result) {
                    if (result) {
                        upload(song_id, fd);
                    } else {
                        $('#btn_upload').prop("disabled", false);
                    }
                });
            } else {
                BootstrapDialog.confirm('Do you want to Upload this Record?', function(result) {
                    if (result) {
                        upload(song_id, fd);
                    } else {
                        $('#btn_upload').prop("disabled", false);
                    }
                });
            }

            return;
        }

        function upload(song_id, fd) {
            $.ajax({
                url: 'song/upload?id=' + song_id,
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',
                xhr: function() {
                    var xhr = $.ajaxSettings.xhr();
                    xhr.upload.addEventListener('progress', function(e) {
                        if (e.lengthComputable) {
                            $('.progress').show();
                            var percentComplete = Math.floor(e.loaded / e.total * 100);
                            $('.progress-bar').css('width', '' + percentComplete + '%');
                            $('.progress-bar').html(percentComplete + '%');
                            //console.log(percentComplete + '%');
                        }
                    }, false);

                    xhr.addEventListener('progress', function(e) {
                        if (e.lengthComputable) {
                            $('.progress').show();
                            var percentComplete = Math.floor(e.loaded / e.total * 100);
                            $('.progress-bar').css('width', '' + percentComplete + '%');
                            $('.progress-bar').html(percentComplete + '%');
                            //console.log(percentComplete + '%');
                        }
                    }, false);

                    return xhr;
                },
                success: function(data) {
                    $('#btn_upload').prop("disabled", false);
                    var response = JSON.parse(data);
                    if (response.status === 'true') {
                        toastr.info(response.data);
                        $('.progress').hide();
                        $("#modal-upload .btn-danger").click();
                    } else {
                        //BootstrapDialog.alert(response.data);
                        BootstrapDialog.alert({
                            title: 'Thông báo',
                            message: response.data,
                            callback: function(result) {
                                //window.location.href = '/song';
                            }
                        });
                    }
                }
            });
        }
    </script>


    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }
        
        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
</head>

<body data-new-gr-c-s-check-loaded="14.1013.0" data-gr-ext-installed="">
    <div id="wrapper" class="wrapper animsition" style="animation-duration: 1500ms; opacity: 1;">
        <!-- Navigation -->
        <nav class="navbar navbar-fixed-top" role="navigation" style="background-color: white; height: 65px; box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.2);">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <i class="material-icons">apps</i>
    </button>
                <a class="navbar-brand" href="../home/v2.php" style="padding-top: 5px!important;">
                    <img style="width:180px!important" class="main-logo" src="./assets/logo.png" alt="">
                </a>
            </div>
            <div class="nav-container">
                <!-- /.navbar-header -->
                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.Dropdown -->
                    <li class="dropdown" style="margin-right: 10px; margin-bottom: 50px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Hello, <?= $_SESSION['name'] ?>
                            </a>
                            <div class="dropdown-menu" style="padding-left:10px;">
                                <?php if($_SESSION['email'] == "admin@gmail.com"):?>
                                    <p><a class="dropdown-item fa fa-user" aria-hidden="true" href="../home/admin_profile.php">Profile</a></p>
                                <?php else: ?>
                                    <p><a class="dropdown-item fa fa-user" aria-hidden="true" href="../home/profile.php">Profile</a></p>
                                <?php endif; ?>
                                <p><a class="dropdown-item fa fa-power-off" aria-hidden="true" href="../auth/logout.php">Logout</a></p>
                            </div>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.Dropdown -->
                </ul>
                <!-- /.navbar-top-links -->
            </div>
        </nav>
        <!-- /.Navigation -->
        <div class="sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-heading " style="font-size:16px;"> <span>Navigation</span></li>

                    <li>
                        <a class="bubble_chart" href="http://copyright.skymusic.com.vn/contract">
                            <i class="material-icons">contacts</i> Contracts
                            <span class="fa arrow"></span>
                        </a>
                    </li>
                    <li class="active">

                        <a class="bubble_chart" href="audio_beat.php" style="font-weight: bold;">
                                Records
                                <span class="fa arrow"></span>
                        </a>

                        <ul class="nav nav-second-level collapse in" aria-expanded="true">
                            <li><a class="material-ripple" href="audio_beat.php">Manage Audio/Beat</a></li>
                            <li><a class="material-ripple" href="mv_video.php">Manage MV/Video</a></li>
                            <li><a class="material-ripple" href="export.php">Export Records</a></li>
                            <!-- dong div sub-->
                        </ul>
                    </li>
                    <li>
                        <a class="bubble_chart" href="./manage_artists.php" style="font-weight: bold;">
                                Artists
                                <span class="fa arrow"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.Left Sidebar-->
        <div class="page-wrapper">

            <!-- /.Navbar  Static Side -->
            <div class="control-sidebar-bg"></div>
            <!-- Page Content -->
            <div id="page-wrapper" style="min-height: 675px;">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon" style="margin-top: -10px;width:30px;">
                            <i class="pe-7s-note2"></i>
                        </div>
                        <div class="header-title" style="margin-left: 20px;">
                            <h1>Manage MV/VIDEO</h1>
                            <ol class="breadcrumb" style="margin-right: 20px;">
                                <li><a href="../home/v2.php"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">MV/Video</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /. Content Header (Page header) -->

                    <!-- begin filter -->
                    <div class="row">
                        <div class="panel panel-bd">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Searching MVs</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="form-group row">
                                    <span for="example-text-input" class="col-sm-1 col-form-label">MV's Name</span>
                                    <div class="col-sm-3">
                                        <input class="form-control global_filter" type="text" value="" id="global_filter" name="name" autocomplete="off">
                                    </div>
                                    <span for="example-text-input" class="col-sm-1 col-form-label">Singer</span>
                                    <div class="col-sm-3" id="filter_col3" data-column="3">
                                        <input class="form-control column_filter" id="col3_filter" type="text" value="" name="singer_id" autocomplete="off">
                                    </div>
                                    <span for="example-search-input" class="col-sm-1 col-form-label">Song Writter</span>
                                    <div class="col-sm-3" id="filter_col4" data-column="4">
                                        <input class="form-control column_filter" id="col4_filter" type="text" value="" name="artist_id" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <span for="example-text-input" class="col-sm-1 col-form-label">Cloud Key</span>
                                    <div class="col-sm-3" id="filter_col5" data-column="1">
                                        <input class="form-control column_filter" type="text" value="" id="col1_filter" name="sky_key" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End filter-->

                    <!-- thong tin bai hat-->
                    <div class="row">
                        <div class="col">
                            <div class="panel panel-bd">
                                <div class="panel-heading" style="height:50px;">
                                    <div class="panel-title" style="float:left">
                                        <h4>MV's Info</h4>
                                    </div>
                                    <div class="col-sm-5" style="float:right">
                                        <button type="button" data-toggle="modal" data-target="#modal-lg" data-_id="0" class="btn btn-primary pull-right">
                                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                        </button>
                                        <a href="./export.php">
                                            <button type="submit" class="btn btn-primary pull-right" style="margin-right:5px;">
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                                Export File
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <div id="tb_song_wrapper" class="dataTables_wrapper no-footer">
                                            <div id="tb_song_filter" class="dataTables_filter">
                                                <label>Search
                                                    <input type="search" class="" placeholder="" aria-controls="tb_song">
                                                </label>
                                            </div>
                                            <div id="tb_song_processing" class="dataTables_processing" style="display: none;">Searching...</div>
                                            <table id="tb_song" class="display table-striped dataTable no-footer" width="100%" cellspacing="0" role="grid" aria-describedby="tb_song_info" style="width: 100%;">
                                                <thead>
                                                    <tr class="bg-tr" role="row">
                                                        <th class="dt-left sorting_disabled" rowspan="1" colspan="1" style="width: 19px;" aria-label="#">#</th>
                                                        <th class="sorting_desc" rowspan="1" colspan="1" style="width: 130px;" aria-label="Song key">Song key</th>
                                                        <th style="text-align: left; width: 161px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Mã HD">Contract's ID</th>
                                                        <th style="text-align: left; width: 276px;" class="dt-center dt-left sorting_disabled" rowspan="1" colspan="1" aria-label="Tên bản ghi">Record's Name</th>
                                                        <th style="text-align: left; width: 294px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Tên ca sĩ">Singer</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 294px;" aria-label="Tên tác giả">Song Writter</th>
                                                        <th style="text-align: center; width: 31px;" class="dt-center sorting_disabled" rowspan="1" colspan="1" aria-label="QLQ">Related Right</th>
                                                        <th style="text-align: center; width: 30px;" class="dt-center sorting_disabled" rowspan="1" colspan="1" aria-label="QTG">Author Right</th>
                                                        <th style="text-align: center; width: 99px;" class="dt-center sorting_disabled" rowspan="1" colspan="1" aria-label="Action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td>1</td>
                                                        <td class="sorting_1">tjecnqRBu9Ei</td>
                                                        <td><img id="img_icon" src="./assets/icon-verify.png" width="15" style="vertical-align:sub!important" title="Phụ lục đã ký"> <a href="http://copyright.skymusic.com.vn/contract/detail?oid=3234&amp;aid=5687">00931C-22</a><br></td>
                                                        <td class=" dt-left"> <a href="http://www.nhaccuatui.com/video/em-lyric-video.v1ibw3VHE4ozv.html" target="_blank" title="Play the MV Em (Lyric Video)">Em (Lyric Video)</a></td>
                                                        <td>OBC, Willy</td>
                                                        <td>OBC, Willy</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" checked="check" disabled="true"> <img id="img_icon" src="./assets/icon-verify.png" width="15" style="vertical-align:sub!important" title="Record's Rights end at 25-03-2072"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" checked="check" disabled="true"> <img id="img_icon" src="./assets/icon-verify.png" width="15" style="vertical-align:sub!important" title="Record's Rights end at 25-03-2072"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483355"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>2</td>
                                                        <td class="sorting_1">TXUe3aMCsmnw</td>
                                                        <td><img id="img_icon" src="./assets/icon-verify.png" width="15" style="vertical-align:sub!important" title="Phụ lục đã ký"> <a href="http://copyright.skymusic.com.vn/contract/detail?oid=3196&amp;aid=5686">00908C-22</a><br></td>
                                                        <td class=" dt-left"> <a href="http://www.nhaccuatui.com/video/amnesiablue-lyric-video.M9JuuanWHyFYe.html" target="_blank" title="Play the MV Amnesiablue (Lyric Video)">Amnesiablue (Lyric Video)</a></td>
                                                        <td>Tan, Khang</td>
                                                        <td>Tan, Khang</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" checked="check" disabled="true"> <img id="img_icon" src="./assets/icon-verify.png" width="15" style="vertical-align:sub!important" title="Record's Rights end at 12-03-2072"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" checked="check" disabled="true"> <img id="img_icon" src="./assets/icon-verify.png" width="15" style="vertical-align:sub!important" title="Record's Rights end at 12-03-2072"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483351"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>3</td>
                                                        <td class="sorting_1">4xngN6TP6mfH</td>
                                                        <td><img id="img_icon" src="./assets/icon-verify.png" width="15" style="vertical-align:sub!important" title="Phụ lục đã ký"> <a href="http://copyright.skymusic.com.vn/contract/detail?oid=3124&amp;aid=5684">02086P-22</a><br></td>
                                                        <td class=" dt-left"> <a href="http://copyright.skymusic.com.vn/song/undefined" target="_blank" title="Play the MV Chờ Em (Lyric Video)">Chờ Em (Lyric Video)</a></td>
                                                        <td>OBC</td>
                                                        <td>OBC</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" checked="check" disabled="true"> <img id="img_icon" src="./assets/icon-verify.png" width="15" style="vertical-align:sub!important" title="Record's Rights end at 20-01-2032"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" checked="check" disabled="true"> <img id="img_icon" src="./assets/icon-verify.png" width="15" style="vertical-align:sub!important" title="Record's Rights end at 20-01-2032"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483349"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>4</td>
                                                        <td class="sorting_1">DQqs1XaIBabd</td>
                                                        <td><img id="img_icon" src="./assets/icon-verify.png" width="15" style="vertical-align:sub!important" title="Phụ lục đã ký"> <a href="http://copyright.skymusic.com.vn/contract/detail?oid=2579&amp;aid=5683">01812P-20</a><br></td>
                                                        <td class=" dt-left"><i class="material-icons" style="vertical-align:middle;&#39;" title="Video"></i> <a href="http://www.nhaccuatui.com/video/hai-minh-cung-di.RmUPnttNEfJK8.html" target="_blank" title="Play the MV Hai Mình Cùng Đi">Hai Mình Cùng Đi</a></td>
                                                        <td>TD.Ondamic, Iri</td>
                                                        <td>TD.Ondamic, Iri</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" checked="check" disabled="true"> <img id="img_icon" src="./assets/icon-verify.png" width="15" style="vertical-align:sub!important" title="Record's Rights end at 01-04-2032"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" checked="check" disabled="true"> <img id="img_icon" src="./assets/icon-verify.png" width="15" style="vertical-align:sub!important" title="Record's Rights end at 01-04-2032"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483347"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>5</td>
                                                        <td class="sorting_1">2BZiYAj5powJ</td>
                                                        <td></td>
                                                        <td class=" dt-left"><i class="material-icons" style="vertical-align:middle;&#39;" title="Video"></i> <a href="http://www.nhaccuatui.com/video/khong-the-nao-quen.jvJWRsbaVAqrR.html" target="_blank" title="Play the MV Không Thể Nào Quên">Không Thể Nào Quên</a></td>
                                                        <td>Ng, Sangphan, Blingk</td>
                                                        <td>Ng, Sangphan, Blingk</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483343"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>6</td>
                                                        <td class="sorting_1">gnUhpkpWGkQv</td>
                                                        <td></td>
                                                        <td class=" dt-left"><i class="material-icons" style="vertical-align:middle;&#39;" title="Video"></i> <a href="http://copyright.skymusic.com.vn/song/undefined" target="_blank" title="Play the MV Water Melon - RnB Type Beat">Water Melon - RnB Type Beat</a></td>
                                                        <td>Ở Đây Có Beats!</td>
                                                        <td>Ở Đây Có Beats!</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483339"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>7</td>
                                                        <td class="sorting_1">S5hEigvKCjis</td>
                                                        <td></td>
                                                        <td class=" dt-left"><i class="material-icons" style="vertical-align:middle;&#39;" title="Video"></i> <a href="http://copyright.skymusic.com.vn/song/undefined" target="_blank" title="Play the MV Chilling In Dalat- RnB Type Beat">Chilling In Dalat- RnB Type Beat</a></td>
                                                        <td>Ở Đây Có Beats!</td>
                                                        <td>Ở Đây Có Beats!</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483338"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>8</td>
                                                        <td class="sorting_1">bFAD6OyzzBpw</td>
                                                        <td></td>
                                                        <td class=" dt-left"><i class="material-icons" style="vertical-align:middle;&#39;" title="Video"></i> <a href="http://copyright.skymusic.com.vn/song/undefined" target="_blank" title="Play the MV Falling - R&amp;B Type Beat">Falling - R&amp;B Type Beat</a></td>
                                                        <td>Ở Đây Có Beats!</td>
                                                        <td>Ở Đây Có Beats!</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483337"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>9</td>
                                                        <td class="sorting_1">kf0HmASHH1Lz</td>
                                                        <td></td>
                                                        <td class=" dt-left"> <a href="http://www.nhaccuatui.com/video/ben-do-cuoi-cung-prod-chill-denis-lyric-video.ZpBYrJXz1PCo9.html" target="_blank" title="Play the MV Bến Đỗ Cuối Cùng (prod Chill Denis) (Lyric Video)">Bến Đỗ Cuối Cùng (prod Chill Denis) (Lyric Video)</a></td>
                                                        <td>Dea</td>
                                                        <td>Dea</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483287"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>10</td>
                                                        <td class="sorting_1">zUZQUhSQdQlp</td>
                                                        <td></td>
                                                        <td class=" dt-left"> <a href="http://www.nhaccuatui.com/video/cuoc-song-khong-em-lyric-video.Yya5LPVtAKvXN.html" target="_blank" title="Play the MV Cuộc Sống Không Em (Lyric Video)">Cuộc Sống Không Em (Lyric Video)</a></td>
                                                        <td>N2T</td>
                                                        <td>N2T</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483286"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>11</td>
                                                        <td class="sorting_1">qpvxQyxpxPuu</td>
                                                        <td></td>
                                                        <td class=" dt-left">
                                                            <a href="http://www.nhaccuatui.com/video/dont-call-me-lyric-video.uI7Kc2c7Hj3ju.html" target="_blank" title="Play the MV Don" t="" call="" me="" (lyric="" video) '="">Don't Call Me (Lyric Video)</a></td>
                                                        <td>Mellow, Arius Boiz</td>
                                                        <td>Mellow, Arius Boiz</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483282"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>12</td>
                                                        <td class="sorting_1">ZVbdEBCksAGm</td>
                                                        <td></td>
                                                        <td class=" dt-left"><i class="material-icons" style="vertical-align:middle;&#39;" title="Video"></i> <a href="http://copyright.skymusic.com.vn/song/undefined" target="_blank" title="Play the MV MDMA">MDMA</a></td>
                                                        <td>Minhdea, Panii</td>
                                                        <td>Minhdea, Panii</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483281"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>13</td>
                                                        <td class="sorting_1">TlHcpN6Qtrtf</td>
                                                        <td></td>
                                                        <td class=" dt-left"> <a href="http://www.nhaccuatui.com/video/thoi-lyric-video.IdV01eogDsimn.html" target="_blank" title="Play the MV Thôi (Lyric Video)">Thôi (Lyric Video)</a></td>
                                                        <td>My Carol, Tùng Lâm</td>
                                                        <td>My Carol, Tùng Lâm</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483280"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>14</td>
                                                        <td class="sorting_1">8y1KLrYJdmfD</td>
                                                        <td></td>
                                                        <td class=" dt-left"> <a href="http://www.nhaccuatui.com/video/thu-anh-muon-lyric-video.OmRD25w46LqdO.html" target="_blank" title="Play the MV Thứ Anh Muốn (Lyric Video)">Thứ Anh Muốn (Lyric Video)</a></td>
                                                        <td>Nhan Thanh Duc</td>
                                                        <td>Nhan Thanh Duc</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483279"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>15</td>
                                                        <td class="sorting_1">W3049BJxjKu5</td>
                                                        <td></td>
                                                        <td class=" dt-left"><i class="material-icons" style="vertical-align:middle;&#39;" title="Video"></i> <a href="http://www.nhaccuatui.com/video/muon.d85jrgskDXqd0.html" target="_blank" title="Play the MV Muộn">Muộn</a></td>
                                                        <td>1998 Band, LaiBB, Wtran</td>
                                                        <td>1998 Band, LaiBB, Wtran</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483278"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>16</td>
                                                        <td class="sorting_1">tLIIuGWGcZMD</td>
                                                        <td></td>
                                                        <td class=" dt-left"><i class="material-icons" style="vertical-align:middle;&#39;" title="Video"></i> <a href="http://www.nhaccuatui.com/video/vi-so-em-tu-choi.cTT7itbCMjBr2.html" target="_blank" title="Play the MV Vì Sợ Em Từ Chối">Vì Sợ Em Từ Chối</a></td>
                                                        <td>Ndk</td>
                                                        <td>Ndk</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483277"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>17</td>
                                                        <td class="sorting_1">DuraXgfUld7o</td>
                                                        <td></td>
                                                        <td class=" dt-left"><i class="material-icons" style="vertical-align:middle;&#39;" title="Video"></i> <a href="http://www.nhaccuatui.com/video/ngay-tinh-nhan.NYqFHrVJo0grg.html" target="_blank" title="Play the MV Ngày Tình Nhân">Ngày Tình Nhân</a></td>
                                                        <td>Xesi, T.R.I</td>
                                                        <td>Xesi, T.R.I</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483276"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>18</td>
                                                        <td class="sorting_1">V1ytgBOXA1HK</td>
                                                        <td></td>
                                                        <td class=" dt-left"> <a href="http://www.nhaccuatui.com/video/vang-thua-ngai-lyric-video.GPXUiPwrwbh41.html" target="_blank" title="Play the MV Vâng, Thưa Ngài (Lyric Video)">Vâng, Thưa Ngài (Lyric Video)</a></td>
                                                        <td>Flee MT</td>
                                                        <td>Flee MT</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483275"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>19</td>
                                                        <td class="sorting_1">9CZ5bfzK70h0</td>
                                                        <td></td>
                                                        <td class=" dt-left"> <a href="http://www.nhaccuatui.com/video/trap-flow-lyric-video.aVA713bQ8AvYs.html" target="_blank" title="Play the MV Trap Flow (Lyric Video)">Trap Flow (Lyric Video)</a></td>
                                                        <td>T.U.S</td>
                                                        <td>T.U.S</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483274"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>20</td>
                                                        <td class="sorting_1">iCXpD2p93BfU</td>
                                                        <td></td>
                                                        <td class=" dt-left"><i class="material-icons" style="vertical-align:middle;&#39;" title="Video"></i> <a href="http://www.nhaccuatui.com/video/cho-anh-ve.St1zKH1qsPtxT.html" target="_blank" title="Play the MV Chờ Anh Về">Chờ Anh Về</a></td>
                                                        <td>Lee Phượng, Tdo Kwan</td>
                                                        <td>Lee Phượng, Tdo Kwan</td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"><input tabindex="71" type="checkbox" disabled="true" style="margin-right:15px;"></td>
                                                        <td class=" dt-center"> <a href="javascript:;" data-toggle="modal" data-target="#modal-lg" data-placement="left" title="Edit MV's Info" data-song_id="483273"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="dataTables_info" id="tb_song_info" role="status" aria-live="polite">kết quả từ 1 đến 20 của 19,718 kết quả</div>
                                            <div class="dataTables_paginate paging_simple_numbers" id="tb_song_paginate"><a class="paginate_button previous disabled" aria-controls="tb_song" data-dt-idx="0" tabindex="0" id="tb_song_previous">Previous</a><span><a class="paginate_button current" aria-controls="tb_song" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="tb_song" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="tb_song" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="tb_song" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="tb_song" data-dt-idx="5" tabindex="0">5</a><span class="ellipsis">…</span>
                                                <a class="paginate_button " aria-controls="tb_song" data-dt-idx="6" tabindex="0">986</a>
                                                </span><a class="paginate_button next" aria-controls="tb_song" data-dt-idx="7" tabindex="0" id="tb_song_next">Next</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end thong tin bai hat-->

                    <!--dialog update song-->
                    <form method="GET" class="form-get1" id="mainform" action="http://copyright.skymusic.com.vn/song#">
                        <div class="modal fade" id="modal-lg" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h1 class="modal-title" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Edit Record's Info</h1>
                                        <input type="hidden" value="0" id="addend_id" name="addend_id">
                                    </div>
                                    <div class="modal-body">
                                        <div class="panel-body">
                                            <div class="form-group row">
                                                <span for="example-url-input" class="col-sm-2 col-form-label">Record's Name <span class="start-red">*</span></span>
                                                <div class="col-sm-6">
                                                    <input class="form-control required" type="text" value="" name="song_name" id="f1-name" placeholder="Name On Contract">
                                                    <input type="hidden" value="" id="song_id" name="song_id">
                                                    <input type="hidden" value="" id="song_key" name="song_key">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <span for="example-url-input" class="col-sm-2 col-form-label"></span>
                                                <div class="col-sm-1">
                                                    <div class="i-check">
                                                        <input tabindex="7" class="required" type="radio" id="rd-radio-song" name="type" value="1" checked="check">
                                                        <label for="rd-radio-song" style="font-weight:0px!important;">Song</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="i-check">
                                                        <input tabindex="7" class="required" type="radio" id="rd-radio-beat" name="type" value="2">
                                                        <label for="rd-radio-mv" style="font-weight:0px!important;">Beat</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <span for="example-url-input" class="col-sm-2 col-form-label">Publisher's Name</span>
                                                <div class="col-sm-6">
                                                    <input class="form-control" type="text" value="" name="title_release" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <span for="example-url-input" class="col-sm-2 col-form-label">Version</span>
                                                <div class="col-sm-6">
                                                    <input class="form-control" type="text" value="" name="version" placeholder="Remix, Cover, Liveshow, Beat....">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <span for="example-url-input" class="col-sm-2 col-form-label">Singer<span class="start-red">*</span></span>
                                                <div class="col-sm-6">
                                                    <ul class="token-input-list">
                                                        <li class="token-input-input-token"><input type="text" autocomplete="off" id="token-input-f_singer_id" style="outline: none;">
                                                            <tester style="position: absolute; top: -9999px; left: -9999px; width: auto; font-size: 14px; font-family: Verdana; font-weight: 400; letter-spacing: 0px; white-space: nowrap;"></tester>
                                                        </li>
                                                    </ul><input class="form-control required" type="text" value="" name="singer_id" id="f_singer_id" style="display: none;">
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="http://copyright.skymusic.com.vn/customer/artist?type=1" target="_blank" class="btn btn-primary" style="padding:1px;margin-top: 5px;" title="Thêm Ca sĩ | Nhạc sĩ">
                                                        <i class="fa fa-plus" aria-hidden="true" style="width:15px;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <span for="example-url-input" class="col-sm-2 col-form-label">Writter<span class="start-red">*</span></span>
                                                <div class="col-sm-6">
                                                    <ul class="token-input-list">
                                                        <li class="token-input-input-token"><input type="text" autocomplete="off" id="token-input-f_artist_id" style="outline: none;">
                                                            <tester style="position: absolute; top: -9999px; left: -9999px; width: auto; font-size: 14px; font-family: Verdana; font-weight: 400; letter-spacing: 0px; white-space: nowrap;"></tester>
                                                        </li>
                                                    </ul><input class="form-control required" type="text" value="" name="artist_id" id="f_artist_id" style="display: none;">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <span for="example-url-input" class="col-sm-2 col-form-label">Genre</span>
                                                <div class="col-sm-6">
                                                    <select class="select form-control" name="select_genre">
                                                <option value="0" selected="selected">------Choose One------</option><option value="1">Trịnh's Song</option><option value="2">Romantic</option><option value="3">Instrumental</option><option value="4">Kids</option><option value="5">V-Pop</option><option value="6">Others</option><option value="8">V-Rock</option><option value="9">Revolution</option><option value="10">Pre-War</option><option value="11">Cover</option><option value="12">Remix</option><option value="13">Rap</option><option value="14">Beat</option><option value="15">C-Pop</option><option value="16">K-Pop</option><option value="17">USUK</option><option value="18">Rock</option><option value="19">Hip Hop</option><option value="20">R&amp;B</option><option value="21">Soul</option><option value="22">Jazz</option><option value="23">Indie</option><option value="24">Rap</option><option value="25">Electronic</option><option value="26">Blues</option><option value="27">Classical</option><option value="28">Latin</option><option value="29">Country</option>
                                            </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <span for="example-url-input" class="col-sm-2 col-form-label">Distribution Region</span>
                                                <div class="col-sm-6">
                                                    <select class="select form-control" name="select_country">
                                                <option value="0" selected="selected">------Choose One------</option><option value="1">Vietnam</option><option value="2">Korea</option><option value="3">Global</option><option value="4">US</option><option value="5">China</option>
                                            </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <span for="example-url-input" class="col-sm-2 col-form-label">Tags</span>
                                                <div class="col-sm-6">
                                                    <ul class="token-input-list">
                                                        <li class="token-input-input-token"><input type="text" autocomplete="off" id="token-input-f_tag_ids" style="outline: none;">
                                                            <tester style="position: absolute; top: -9999px; left: -9999px; width: auto; font-size: 14px; font-family: Verdana; font-weight: 400; letter-spacing: 0px; white-space: nowrap;"></tester>
                                                        </li>
                                                    </ul><textarea class="form-control" placeholder="Enter tags" name="tag_ids" id="f_tag_ids" style="height: 50px; display: none;"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <span for="example-url-input" class="col-sm-2 col-form-label">Thumbnail</span>
                                                <div class="col-sm-1">
                                                    <p>
                                                        <input id="file_image" class="form-control" type="file" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);">
                                                        <div class="jfilestyle  "><span class="focus-jfilestyle" tabindex="0"><label for="file_image"><span><span class="glyphicon glyphicon-folder-open"></span></span>
                                                            </label>
                                                            </span>
                                                        </div>
                                                        <input id="image_song" name="image" type="hidden" value="">
                                                    </p>
                                                </div>
                                                <div class="col-sm-6" id="group_image_song"></div>
                                            </div>
                                            <div class="form-group row">
                                                <span for="example-url-input" class="col-sm-2 col-form-label">CloudKey</span>
                                                <div class="col-sm-6">
                                                    <input class="form-control" type="text" value="" name="nct_key" placeholder="Input CloudKey from Contract">
                                                </div>
                                                <div class="col-sm-4">
                                                    <button id="search_nct_key" type="button" class="btn btn-success">Find CloudKey</button>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <span for="example-url-input" class="col-sm-2 col-form-label"></span>
                                                <div class="col-sm-10">
                                                    <ul id="listKey"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="row">
                                            <div class="col-sm-8" style="float:left;text-align:left;color:silver;">
                                                Last updated by : <span id="last_updated"></span><br> Created by : <span id="created_by"></span>
                                            </div>
                                            <div class="col-sm-2" style="float:right;">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button id="btn_save" type="button" class="btn btn-success" onclick="javascript:sendSaveData(&#39;savePageSong&#39;);">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    </form>
                    <!-- end dialog update song-->

                </div>
                <!-- /.main content -->
            </div>
            <!-- /#page-wrapper -->

        </div>
    </div>

    <!-- STRAT PAGE LABEL PLUGINS -->
    <script src="./assets/Chart.min.js.download" type="text/javascript"></script>
    <script src="./assets/sparkline.min.js.download" type="text/javascript"></script>
    <!-- START THEME LABEL SCRIPT -->
    <script src="./assets/app.min.js.download" type="text/javascript"></script>
    <script src="./assets/jQuery.style.switcher.min.js.download" type="text/javascript"></script>

    <!-- STRAT PAGE LABEL PLUGINS -->
    <script src="./assets/classie.js.download" type="text/javascript"></script>
    <script src="./assets/modalEffects.js.download" type="text/javascript"></script>
    <!-- STRAT PAGE LABEL PLUGINS -->
    <script src="./assets/jquery.backstretch.min.js.download" type="text/javascript"></script>
    <script src="./assets/form.scripts.js.download" type="text/javascript"></script>
    <script src="./assets/modernizr.custom.js.download" type="text/javascript"></script>
    <script src="./assets/classie.js(1).download" type="text/javascript"></script>
    <script src="./assets/notificationFx.js.download" type="text/javascript"></script>
    <script src="./assets/snap.svg-min.js.download" type="text/javascript"></script>
    <script src="./assets/sweetalert.min.js.download" type="text/javascript"></script>
    <script src="./assets/toastr.min.js.download" type="text/javascript"></script>


    <div class="token-input-dropdown" style="display: none;"></div>
    <div class="token-input-dropdown" style="display: none;"></div>
    <div class="token-input-dropdown" style="display: none;"></div>
    <div id="toTop" class="btn back-top" style="display: none;"><span class="ti-arrow-up"></span></div>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>