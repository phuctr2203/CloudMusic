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
    <title>Export Record - CloudData</title>

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
                                type = "<i class='material-icons' style=vertical-align:middle;' title='Video'>videocam</i>";
                                break;
                        }
                        if (row["isTrusted"]) {
                            type = "<span class='fa fa-copyright fa-1' style='color: #dd4b39; margin-right: 3px;' title='Bài hát độc quyền'></span>";
                        }
                        songname = type + "<a href='" + row["linkstream"] + "' target='_blank' title='Play the record " + row["songName"] + "'>" + row["songName"] + "</a>";
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
                            var title = "Record's Contract Still Valid";
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
                            var title = "Record's Contract Still Valid";
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
                            <h1>Export Record</h1>
                            <ol class="breadcrumb" style="margin-right: 20px;">
                                <li><a href="../home/v2.php"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">Export</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /. Content Header (Page header) -->

                    <form id="frmExportExcel" method="POST" action="http://copyright.skymusic.com.vn/export/download_new">
                        <!-- begin filter -->
                        <div class="row">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Searching Info</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group row">
                                        <span for="example-search-input" class="width-sm-2-label col-sm-2 col-form-label text-center">Record's Name</span>
                                        <div class="col-sm-8 width-sm-6-input" id="filter_col4" data-column="4">
                                            <input class="form-control column_filter" placeholder="Input Record's Name" id="songname" type="text" value="" name="songname" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <!-- Quyền bài hát -->
                                        <span for="example-text-input" class="width-sm-2-label col-sm-2 col-form-label text-center">Record's Rights</span>
                                        <div class="col-sm-2 width-sm-2-input">
                                            <select class="form-control global_filter" id="slt-quyenbaihat" name="quyenbaihat">
                                    <option value="0">All</option>
                                    <option value="1">Related Right</option>
                                    <option value="2">Author Right</option>
                                    <option value="3">Have Copyright</option> 
                                    <option value="4">Full Rights</option> 
                                    <option value="5">No Copyright</option>
                                    <option value="6">Liquidation </option>
                                    <option value="7">Derivative Right</option>
                                    <option value="8">Property Right</option>
                                    <option value="9">Record On Transfer</option>
                                </select>
                                        </div>
                                        <!-- Hợp đồng -->
                                        <span for="example-search-input" class="width-sm-2-label col-sm-2 col-form-label text-center">Contract</span>
                                        <div class="col-sm-2 width-sm-2-input" id="filter_col3" data-column="3">
                                            <select class="form-control column_filter" id="slt-hopdong" name="hopdong">
                                    <option value="0">All</option>
                                    <option value="1">Ongoing Contract</option>
                                    <option value="2">Expired Contract</option>
                                    <option value="3">No Contract</option>
                                </select>
                                        </div>
                                        <label class="checkbox-inline"><input type="checkbox" name="exclusive" id="exclusive" value="1">Exclusive</label>
                                    </div>
                                    <div class="form-group row">
                                        <!-- Phạm vi phân phối -->
                                        <span for="example-search-input" class="width-sm-2-label col-sm-2 col-form-label text-center">Distribution Range</span>
                                        <div class="col-sm-2 width-sm-2-input" id="filter_col4" data-column="4">
                                            <select class="form-control column_filter" id="slt-phamvi" name="phamvi" multiple="multiple" style="display: none;">
                                    <option value="1" name="1">Spotify</option>
                                    <option value="13">TSP</option>
                                    <option value="2">Offline</option>
                                    <option value="3">Ringtone</option>
                                    <option value="4">Television</option>
                                    <option value="5">Radio</option>
                                    <option value="6">Game/App</option>
                                    <option value="7">Youtube</option>
                                    <option value="18">Soundcloud</option>
                                    <option value="22">Apple Music</option>
                                    <option value="23">Composition Share</option>
                                    <option value="8">Karaoke</option>
                                    <option value="10">Public Performance</option>
                                    <option value="14">Advertising</option>
                                    <option value="15">Streaming Platform</option>
                                    <option value="16">Social Platform</option>
                                    <option value="17">International</option>
                                    <option value="19">Copy Record</option>
                                    <option value="20">Distributing or importing originals or copies of Record</option>
                                    <option value="21">Propaganda</option>
                                    <option value="25">TikTok</option>
                                    <option value="26">Rights Manager</option>
                                    <option value="9">Others</option>
                                </select>
                                            <div class="btn-group">
                                                <button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="Please Select">
                                        <span class="multiselect-selected-text">Please Select</span> 
                                        <b class="caret"></b>
                                    </button>
                                                <ul class="multiselect-container dropdown-menu">
                                                    <li class="multiselect-item multiselect-all">
                                                        <a tabindex="0" class="multiselect-all">
                                                            <label class="checkbox">
                                                    <input type="checkbox" value="multiselect-all">  Select all
                                                </label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a tabindex="0">
                                                            <label class="checkbox">
                                                    <input type="checkbox" value="1"> Spotify
                                                </label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a tabindex="0">
                                                            <label class="checkbox">
                                                    <input type="checkbox" value="13"> TSP
                                                </label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a tabindex="0">
                                                            <label class="checkbox">
                                                    <input type="checkbox" value="2"> Offline
                                                </label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a tabindex="0">
                                                            <label class="checkbox">
                                                    <input type="checkbox" value="3"> Ringtone
                                                </label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a tabindex="0">
                                                            <label class="checkbox">
                                                    <input type="checkbox" value="4"> Television
                                                </label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a tabindex="0">
                                                            <label class="checkbox">
                                                    <input type="checkbox" value="5"> Radio
                                                </label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a tabindex="0">
                                                            <label class="checkbox">
                                                    <input type="checkbox" value="6"> Game/App
                                                </label>
                                                        </a>
                                                    </li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="7"> Youtube</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="18"> Soundcloud</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="22"> Apple Music</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="23"> Composition Share</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="8"> Karaoke</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="10"> Public Performance</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="14"> Advertising</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="15"> Streaming Platform</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="16"> Social Platform</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="17"> International</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="19"> Copy Record</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="20"> Distributing or importing originals or copies of Record</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="21"> Propaganda</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="25"> TikTok</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="26"> Rights Manager</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="9"> Others</label></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Loại bài hát -->
                                        <span for="example-text-input" class="width-sm-2-label col-sm-2 col-form-label text-center">Record Type</span>
                                        <div class="col-sm-2 width-sm-2-input">
                                            <select class="form-control global_filter" id="slt-loaibaihat" multiple="multiple" name="loaibaihat" style="display: none;">
                                    <option value="1">Audio</option>
                                    <option value="3">MV</option>
                                    <option value="4">Video</option>
                                    <option value="2">Beat</option>
                                    <option value="5">Composition</option>
                                </select>
                                            <div class="btn-group"><button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="Please Select"><span class="multiselect-selected-text">Please Select</span> <b class="caret"></b></button>
                                                <ul class="multiselect-container dropdown-menu">
                                                    <li class="multiselect-item multiselect-all"><a tabindex="0" class="multiselect-all"><label class="checkbox"><input type="checkbox" value="multiselect-all">  Select all</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="1"> Audio</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="3"> MV</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="4"> Video</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="2"> Beat</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="5"> Composition</label></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span for="example-text-input" class="width-sm-2-label col-sm-2 col-form-label text-center">Contractor</span>
                                        <div class="col-sm-2 width-sm-1-input">
                                            <select id="sale_id" name="sale_id" class="form-control">
                                    <option value="0" selected="selected">------Choose One------</option><option value="64">Hồ Ngọc Quốc Thịnh</option><option value="65">Dương Minh</option><option value="2">Trần Hoàng Phúc</option><option value="66">Thi To</option><option value="3">Phong Nguyễn</option><option value="67">Dương Thị Diễm Lệ</option><option value="68">Legal Team</option><option value="69">Content Department</option><option value="70">Bình Nguyễn</option><option value="71">Vy Lương</option><option value="72">Dương Ngọc An</option><option value="9">TienLTC</option><option value="73">Legal Department</option><option value="74">Phan Thị Thu Thảo</option><option value="11">Phung Trần</option><option value="75">Lương Hồ Công Bảo</option><option value="76">Khâu Hoàng Thịnh</option><option value="13">Nguyễn Trí Dũng</option><option value="23">Nguyệt</option><option value="30">Nguyễn Long Danh</option><option value="31">License Team</option><option value="32">Mai Nguyễn</option><option value="33">Văn Công Chí Hiếu</option><option value="36">Trương Tuấn Đạt</option><option value="38">Nguyễn Thị Hòa</option><option value="39">Nguyễn Thị Cẩm Tú</option><option value="47">Đinh Thị Trâm Anh</option><option value="50">HR</option><option value="51">VCPMC</option><option value="52">CloudMusic</option><option value="53">Hiệp Danh</option><option value="54">Long Nguyễn</option><option value="55">CloudMusic</option><option value="56">Đạt Nguyễn</option><option value="57">Nga Lê</option><option value="58">Huỳnh Thục Đoan</option><option value="60">Tùng Phòng</option><option value="61">Sơn</option><option value="62">Hoan Bùi</option><option value="63">Hồ Lê</option>
                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <span for="example-search-input" class="width-sm-2-label col-sm-2 col-form-label text-center">Contract's ID</span>
                                        <div class="col-sm-2 width-sm-2-input" id="filter_col4" data-column="4">
                                            <input class="form-control column_filter" placeholder="Input ID" id="code_hd" type="text" value="" name="code_hd" autocomplete="off">
                                        </div>
                                        <!-- Thể loại nhạc -->
                                        <span for="example-search-input" class="width-sm-2-label col-sm-2 col-form-label text-center">Contract Annex</span>
                                        <div class="col-sm-2 width-sm-2-input" id="filter_col3" data-column="3">
                                            <select class="form-control" id="appendix_id" name="appendix_id">
                                    <option value="0">----Choose One----</option>
                                </select>
                                        </div>
                                        <span for="example-search-input" class="width-sm-2-label col-sm-2 col-form-label text-center">Provide by VCPMC</span>
                                        <div class="col-sm-2 width-sm-1-input" id="filter_col3" data-column="3">
                                            <select class="form-control" id="detail_iscompleted" name="detail_iscompleted">
                                    <option value="0">--Choose Status--</option>
                                    <option value="-1">Authorized</option>
                                    <option value="1">No Authorize</option>
                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <!-- Thể loại nhạc -->
                                        <span for="example-search-input" class="width-sm-2-label col-sm-2 col-form-label text-center">Thể loại nhạc</span>
                                        <div class="col-sm-2 width-sm-2-input" id="filter_col3" data-column="3">
                                            <select class="form-control column_filter" id="slt-theloai" name="theloai" multiple="multiple" style="display: none;">
                                    <option value="1">Trịnh's Song</option>
                                    <option value="2">Romantic</option>
                                    <option value="3">Instrumental</option>
                                    <option value="4">Kids</option>
                                    <option value="5">V-Pop</option>
                                    <option value="6">Others</option>
                                    <option value="8">V-Rock</option>
                                    <option value="9">Revolution</option>
                                    <option value="10">Pre-War</option>
                                    <option value="11">Cover</option>
                                    <option value="12">Remix</option>
                                    <option value="13">Rap</option>
                                    <option value="14">Beat</option>
                                    <option value="15">K-Pop</option>
                                    <option value="16">C-Pop</option>
                                    <option value="17">USUK</option>
                                </select>
                                            <div class="btn-group"><button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="Please Select"><span class="multiselect-selected-text">Please Select</span> <b class="caret"></b></button>
                                                <ul class="multiselect-container dropdown-menu">
                                                    <li class="multiselect-item multiselect-all"><a tabindex="0" class="multiselect-all"><label class="checkbox"><input type="checkbox" value="multiselect-all">  Select all</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="1"> Trịnh's Song</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="2"> Romantic</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="3"> Instrumental</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="4"> Kids</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="5"> V-Pop</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="6"> Others</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="8"> V-Rock</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="9"> Revolution</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="10"> Pre-War</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="11"> Cover</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="12"> Remix</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="13"> Rap</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="14"> Beat</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="15"> K-Pop</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="16"> Pop</label></a></li>
                                                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="17"> USUK</label></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Trang thai hop dong -->
                                        <span for="example-text-input" class="width-sm-2-label col-sm-2 col-form-label text-center">Contract Annex Status</span>
                                        <div class="col-sm-2 width-sm-2-input">
                                            <select class="form-control column_filter" id="appendix_status" name="appendix_status">
                                    <option value="-1" selected="selected">----Choose Status----</option>
                                    <option value="0">Contract Annex Sign Pending</option>
                                    <option value="1">Contract Annex Signed</option>
                                    <option value="2">Cancel</option>
                                    <option value="3">Derivative</option>
                                </select>
                                        </div>
                                        <span for="example-text-input" class="width-sm-2-label col-sm-2 col-form-label text-center">Contract Annex Authorize</span>
                                        <div class="col-sm-2 width-sm-1-input">
                                            <select class="form-control column_filter" id="appendix_iscompleted" name="appendix_iscompleted">
                                    <option value="-1" selected="selected">--Choose Status--</option>
                                    <option value="0">Pending</option>
                                    <option value="1">Authorized</option>
                                    <option value="2">Editing</option>
                                    <option value="3">Cancel</option>
                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="width-sm-2-label col-sm-1 text-center">
                                            <div class="i-check">
                                                <input tabindex="7" type="radio" id="rd-date-all" name="date_type" value="0" checked="check">
                                                <label for="rd-date-all" style="font-weight:0px!important;">Select All</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="i-check">
                                                <input tabindex="7" type="radio" id="rd-date-created" name="date_type" value="1">
                                                <label for="rd-date-created" style="font-weight:0px!important;">Date of Create</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="i-check">
                                                <input tabindex="7" type="radio" id="rd-contract-date-created" name="date_type" value="4">
                                                <label for="rd-contract-date-created" style="font-weight:0px!important;">Date of Authorize</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="width-sm-2-label col-sm-1 text-center">
                                            <div class="i-check">
                                                <label for="rd-date-all" style="font-weight:0px!important;"></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="i-check">
                                                <input tabindex="7" type="radio" id="rd-date-start" name="date_type" value="2">
                                                <label for="rd-date-start" style="font-weight:0px!important;">Date of Contract</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="i-check">
                                                <input tabindex="7" type="radio" id="rd-date-end" name="date_type" value="3">
                                                <label for="rd-date-end" style="font-weight:0px!important;">Date of Expire</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="input-group date" id="datetimepicker_start">
                                                <input class="form-control" type="text" id="date_start" value="" name="date_start" placeholder="From" data-bv-field="date_start"><i class="form-control-feedback" data-bv-icon-for="date_start" style="display: none; top: 0px;"></i>
                                                <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                            <small data-bv-validator="notEmpty" data-bv-validator-for="date_start" class="help-block" style="display: none;">Please Input Start Date</small>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="input-group date" id="datetimepicker_end">
                                                <input class="form-control" type="text" value="" id="date_end" name="date_end" placeholder="To" data-bv-field="date_end"><i class="form-control-feedback" data-bv-icon-for="date_end" style="display: none; top: 0px;"></i>
                                                <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                            <small data-bv-validator="notEmpty" data-bv-validator-for="date_end" class="help-block" style="display: none;">Please Input End Date</small>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-info" onclick="getListData()">Search </button>
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
                                            <h4>Export Information</h4>
                                        </div>
                                        <div class="col-sm-9" style="text-align:right;float:right;">
                                            <iframe id="UploadWindow" name="UploadWindow" width="0" height="0" style="display:none;" src="javascript:void(0)" src="./saved_resource.html"></iframe>
                                            <button type="button" onclick="sendMailExportAll()" class="btn btn-primary pull-right" style="margin-right:5px;">
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    Export via Email
                                </button>
                                            <button type="button" onclick="postDataDownload()" class="btn btn-primary pull-right" style="margin-right:5px;">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                    Export to PC
                                </button> Page No.
                                            <input type="text" placeholder="Số trang cần xuất" name="page_index" id="quantity-export" value="1"> Record No.
                                            <input type="text" placeholder="Số lượng bài hát cần xuất" name="quantity" id="quantity-export" value="10000">
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="tb_song" class="display table-striped" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr class="bg-tr">
                                                        <th>#</th>
                                                        <th>Contract ID</th>
                                                        <th>Record's Name</th>
                                                        <th>Singer</th>
                                                        <th>Writter</th>
                                                        <th>Related Right</th>
                                                        <th>Author Right</th>
                                                        <th>Exclusive</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end thong tin bai hat-->
                    </form>
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


    <div id="toTop" class="btn back-top"><span class="ti-arrow-up"></span></div>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>