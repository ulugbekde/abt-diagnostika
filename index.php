<!DOCTYPE html>
<html lang="uz" translate="no">

<head>
    <base href="/" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Ulug'bek Bolqiboyev" />
    <meta name="googlebot" content="notranslate">
    <meta name="robots" content="noindex" />
    <title>Ulug'bek web | ABT</title>
    <link rel="icon" type="image/png" href="/images/favicon.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

</head>

<body>
    <div id="mute">
        <header>
        </header>
       <div class="mt-5"></div>
        <div class="container mt-5 align-items-center mb-5" style="min-height: 80vh">
            <main role="main" class="pb-3">



                <div class="mx-auto" style="max-width: 400px">
                    <form method="post">
                        <div class="text-danger validation-summary-valid" data-valmsg-summary="true">
                            <ul>
                                <li style="display:none"></li>
                            </ul>
                        </div>
                        <div class="mt-3">
                            <label for="Input_Subject1">1-fan</label>
                            <select class="form-control" data-val="true"
                                data-val-required="Bo&#x27;sh bo&#x27;masligi kerak" id="Input_Subject1"
                                name="Input.Subject1">
                                <option value="-1" disabled selected>Tanlang</option>
                                <option value="8">Matematika</option>
                                <option value="9">Fizika</option>
                                <option value="10">Geografiya</option>
                                <option value="11">Tarix</option>
                                <option value="12">Kimyo</option>
                                <option value="13">Biologiya</option>
                                <option value="14">Rus tili va adabiyoti</option>
                                <option value="15">Ona tili va adabiyoti</option>
                                <option value="16">O&#x27;zbek tili va adabiyoti</option>
                                <option value="18">Qozoq tili va adabiyoti</option>
                                <option value="19">Qoraqalpoq tili va adabiyoti</option>
                                <option value="20">Tojik tili va adabiyoti</option>
                                <option value="21">Turkman tili va adabiyoti</option>
                                <option value="22">Chet tili</option>
                                <option value="23">Ingliz tili</option>
                                <option value="24">Fransuz tili</option>
                                <option value="25">Nemis tili</option>
                                <option value="26">Kasbiy(ijodiy) imtihon</option>
                            </select>
                            <span class="text-danger field-validation-valid" data-valmsg-for="Input.Subject1"
                                data-valmsg-replace="true"></span>
                        </div>
                        <div class="mt-3">
                            <label for="Input_Subject2">2-fan</label>
                            <select class="form-control" data-val="true"
                                data-val-required="Bo&#x27;sh bo&#x27;masligi kerak" id="Input_Subject2"
                                name="Input.Subject2">
                                <option value="-1" disabled selected>Tanlang</option>
                                <option value="8">Matematika</option>
                                <option value="9">Fizika</option>
                                <option value="10">Geografiya</option>
                                <option value="12">Kimyo</option>
                                <option value="13">Biologiya</option>
                                <option value="14">Rus tili va adabiyoti</option>
                                <option value="15">Ona tili va adabiyoti</option>
                                <option value="16">O&#x27;zbek tili va adabiyoti</option>
                                <option value="19">Qoraqalpoq tili va adabiyoti</option>
                                <option value="22">Chet tili</option>
                                <option value="23">Ingliz tili</option>
                                <option value="26">Kasbiy(ijodiy) imtihon</option>
                            </select>
                            <span class="text-danger field-validation-valid" data-valmsg-for="Input.Subject2"
                                data-valmsg-replace="true"></span>
                        </div>
                        <div class="mt-3">
                            <label for="Input_Type">Ta&#x27;lim shakli</label>
                            <select class="form-control" data-val="true"
                                data-val-required="Bo&#x27;sh bo&#x27;masligi kerak" id="Input_Type" name="Input.Type">
                                <option value="-1" disabled selected>Tanlang</option>
                                <option value="1">Kunduzgi</option>
                                <option value="2">Sirtqi</option>
                                <option value="3">Kechki</option>
                                <option value="4">Masofaviy</option>
                            </select>
                            <span class="text-danger field-validation-valid" data-valmsg-for="Input.Type"
                                data-valmsg-replace="true"></span>
                        </div>
                        <div class="mt-3">
                            <label for="Input_Language">Ta&#x27;lim tili</label>
                            <select class="form-control" data-val="true"
                                data-val-required="Bo&#x27;sh bo&#x27;masligi kerak" id="Input_Language"
                                name="Input.Language">
                                <option value="-1" disabled selected>Tanlang</option>
                                <option value="0">O'zbek</option>
                                <option value="1">Qoraqalpoq</option>
                                <option value="2">Rus</option>
                                <option value="3">Tojik</option>
                                <option value="4">Qozoq</option>
                                <option value="5">Turkman</option>
                                <option value="6">Qirg'iz</option>
                            </select>
                            <span class="text-danger field-validation-valid" data-valmsg-for="Input.Language"
                                data-valmsg-replace="true"></span>
                        </div>
                        <div class="mt-3">
                            <label for="Input_Score">Olgan balingiz</label>
                            <input class="form-control" type="text" data-val="true"
                                data-val-number="The field Olgan balingiz must be a number."
                                data-val-range="10 dan 300 gacha bo&#x27;lishi kerak" data-val-range-max="300"
                                data-val-range-min="10" data-val-required="Bo&#x27;sh bo&#x27;masligi kerak"
                                id="Input_Score" name="Input.Score" value="" />
                            <span class="text-danger field-validation-valid" data-valmsg-for="Input.Score"
                                data-valmsg-replace="true"></span>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Tekshirish</button>
                        <input name="__RequestVerificationToken" type="hidden"
                            value="" />
                    </form>
                </div>

                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                    $url = "https://apro.uz/AbiResultChecker";
                    $data = [
                        "Input.Subject1" => $_POST['Input_Subject1'],
                        "Input.Subject2" => $_POST['Input_Subject2'],
                        "Input.Type" => $_POST['Input_Type'],
                        "Input.Language" => $_POST["Input_Language"],
                        "Input.Score" => $_POST["Input_Score"],
                        "__RequestVerificationToken" => "CfDJ8LVSujL00xNMkVU2eqi28AIVfXO6stg3tOQd1ecEeEPn_03-9KYdIo4zOW0q-5jF7chBI2tfjVqZCWZbD1tLQq-fL2dBtvgNSorfJxg9WtF0blob2tSlnBD9_VHwQqh-VX45I4ErevPMZVTTE8V9mAZsrYEC6pRCgTK4o6seobpKk_0OHSXb_wOZJ-6rs9WbiQ",
                    ];

                    $ch = curl_init($url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                    curl_setopt($ch, CURLOPT_HTTPHEADER, [
                        "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
                        "Accept-Language: en-US,en;q=0.9",
                        "Cache-Control: max-age=0",
                        "Connection: keep-alive",
                        "Content-Type: application/x-www-form-urlencoded",
                        "Cookie: .AspNetCore.Antiforgery.OYg6cXpzLMI=CfDJ8LVSujL00xNMkVU2eqi28AJZ0046BzpNycVqhuK8wUcvV9mRgyHtdO6Q0xvuhJeTVoGmkhuZAGnEAxdVLWpQJZEE96TSjNcYoc-G7ZMDJK35-kpJ8rsTBLhAIXrCVvSHKhFbUvpdC-dkVrZ61j42gfU; .AspNetCore.Identity.Application=CfDJ8LVSujL00xNMkVU2eqi28AJJAGnbBWmq0UDFWD4SsEHUTzI_ScHnRWDftk2tWPqFMC5NbwiawFt0VrI6jAz_GLOua9HBz1xCeHx0987d3gwDq5dzjjqLl_hG127jyKPRVoHr5INw4Q89XTvJAx8adPEA8BzeTYZRYfuupg_uyEveQdecJVf8xBsukSuxspYI4ZE0sKGy-FlZ-dYDTgEtrrzM6H4cpg5LkLDWN1nsjk9xgjR5Pyb8P-2XJsoIkiLUvCxuUfTfC3kSdgeU5I_DD0DaVAL7SWhSd9L5FpOmXR6ySVXZNR0I39J23sa5JRmVKlppCnH4_fInHGW0duo8g9PuiE2BG0rSBKiyP5EsWfmm5z8hYWiYnlIlzF8OAaxJK3GBWjaEspk4zNvmukItPlFHZynH0l8uZNSLm26IF_3ADyqu2GWSvY2B175Uj9f3UyGJF-QcSOWk9dN8kaLrJQwCAl_mv7S7eKowE9lhoxS-MUKJL4hGFRrl1_wLVDKWpwZZtul15jpjrCscn35YWbEVIIGu-VuuWnL3DLa2BG7eG3jfEX-DSHy0p1ruz_htpfsRMuNjhqk_XpIjOODVx1Q1ID4AGsyrFeP0-TZKMkImaoaZ9jJDz4o9BSsARrnHPaa3LHwVSj5LXMPviGrOeB-Kbnf8o7ofVxPrw2SvKVNKgNCZ9CvaSUbrOjAorIsCMda-A5CcDh-einhLfjh33pM",
                        "Origin: https://apro.uz",
                        "Referer: https://apro.uz/AbiResultChecker",
                        "Sec-Fetch-Dest: document",
                        "Sec-Fetch-Mode: navigate",
                        "Sec-Fetch-Site: same-origin",
                        "Sec-Fetch-User: ?1",
                        "Upgrade-Insecure-Requests: 1",
                        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36",
                        "sec-ch-ua: \"Not A;Brand\";v=\"99\", \"Google Chrome\";v=\"127\", \"Chromium\";v=\"127\"",
                        "sec-ch-ua-mobile: ?0",
                        "sec-ch-ua-platform: \"Windows\"",
                    ]);

                    $response = curl_exec($ch);

                    if (curl_errno($ch)) {
                        echo 'cURL xatosi: ' . curl_error($ch);
                    }

                    curl_close($ch);

                    if ($response !== false) {
                        $dom = new DOMDocument();
                        @$dom->loadHTML($response);

                        $xpath = new DOMXPath($dom);
                        $element = $xpath->query('//*[@id="table"]');

                        if ($element->length > 0) {
                            $html = $dom->saveHTML($element->item(0));
                            echo str_replace("Kirish bali (O'tgan yilgi)","Ball",str_replace("Tashxis","Diagnostika",$html));
                        } else {
                            echo '<div class="alert alert-danger mt-3">
      <p>Siz to\'plagan ball bilan siz test topshirgan fanlarga mos keladigan yo\'nalishga talabalikka tavsiya etilmaysiz.</p>
  </div>';
                        }
                    } else {
                        echo "So'rovda xatolik yuz berdi.";
                    }
                }
                ?>





            </main>
        </div>
    </div>
    <div class="loading d-none" id="loading">
        <div class="loading-content">
            <div class="loader">Loading...</div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>


    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.min.js" crossorigin="anonymous"
        integrity="sha384-rZfj/ogBloos6wzLGpPkkOr/gpkBNLZ6b6yLy4o+ok+t/SAKlL5mvXLr0OXNi1Hp">
        </script>
    <script>(window.jQuery && window.jQuery.validator || document.write("\u003Cscript src=\u0022/Identity/lib/jquery-validation/dist/jquery.validate.min.js\u0022 crossorigin=\u0022anonymous\u0022 integrity=\u0022sha384-rZfj/ogBloos6wzLGpPkkOr/gpkBNLZ6b6yLy4o\u002Bok\u002Bt/SAKlL5mvXLr0OXNi1Hp\u0022\u003E\u003C/script\u003E"));</script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validation.unobtrusive/3.2.9/jquery.validate.unobtrusive.min.js"
        crossorigin="anonymous" integrity="sha384-ifv0TYDWxBHzvAk2Z0n8R434FL1Rlv/Av18DXE43N/1rvHyOG4izKst0f2iSLdds">
        </script>
    <script>(window.jQuery && window.jQuery.validator && window.jQuery.validator.unobtrusive || document.write("\u003Cscript src=\u0022/Identity/lib/jquery-validation-unobtrusive/jquery.validate.unobtrusive.min.js\u0022 crossorigin=\u0022anonymous\u0022 integrity=\u0022sha384-ifv0TYDWxBHzvAk2Z0n8R434FL1Rlv/Av18DXE43N/1rvHyOG4izKst0f2iSLdds\u0022\u003E\u003C/script\u003E"));</script>





    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.min.js" crossorigin="anonymous"
        integrity="sha384-rZfj/ogBloos6wzLGpPkkOr/gpkBNLZ6b6yLy4o+ok+t/SAKlL5mvXLr0OXNi1Hp">
        </script>
    <script>(window.jQuery && window.jQuery.validator || document.write("\u003Cscript src=\u0022/Identity/lib/jquery-validation/dist/jquery.validate.min.js\u0022 crossorigin=\u0022anonymous\u0022 integrity=\u0022sha384-rZfj/ogBloos6wzLGpPkkOr/gpkBNLZ6b6yLy4o\u002Bok\u002Bt/SAKlL5mvXLr0OXNi1Hp\u0022\u003E\u003C/script\u003E"));</script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validation.unobtrusive/3.2.9/jquery.validate.unobtrusive.min.js"
        crossorigin="anonymous" integrity="sha384-ifv0TYDWxBHzvAk2Z0n8R434FL1Rlv/Av18DXE43N/1rvHyOG4izKst0f2iSLdds">
        </script>
    <script>(window.jQuery && window.jQuery.validator && window.jQuery.validator.unobtrusive || document.write("\u003Cscript src=\u0022/Identity/lib/jquery-validation-unobtrusive/jquery.validate.unobtrusive.min.js\u0022 crossorigin=\u0022anonymous\u0022 integrity=\u0022sha384-ifv0TYDWxBHzvAk2Z0n8R434FL1Rlv/Av18DXE43N/1rvHyOG4izKst0f2iSLdds\u0022\u003E\u003C/script\u003E"));</script>



    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table').DataTable({
                rowId: 'staffId',
                "order": [],
                language: {
                    'search': 'Qidirish: ',
                    "emptyTable": "Hech narsa topilmadi",
                    "info": "_TOTAL_ yozuvdan _START_ dan _END_ gacha ko'rsatilmoqda",
                    "infoEmpty": "0 yozuvdan 0 dan 0 gacha ko'rsatilmoqda",
                    "infoFiltered": "(filtered from _MAX_ total entries)",
                    "lengthMenu": "Soni: _MENU_",
                    "loadingRecords": "Yuklanayapti...",
                    "processing": "Iltimos kuting...",
                    "zeroRecords": "Bunday yozuv topilmadi",
                    "paginate": {
                        "first": "Birinchi",
                        "last": "Oxirgi",
                        "next": "Keyingi",
                        "previous": "Oldingi"
                    },
                    "aria": {
                        "sortAscending": ": o'sish bo'yicha tartiblash yoqildi",
                        "sortDescending": ": kamayish bo'yicha tartiblash yoqildi"
                    }
                },

                initComplete: function () {
                    this.api().columns().every(function () {
                        var column = this;
                        var select = $('<select style="font-size:.9rem" class="form-select form-select-sm"><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        column.data().unique().sort().each(function (d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>')
                        });
                    });

                }

            });
        });
    </script>


</body>

</html>
