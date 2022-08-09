<x-app-layout>
    <div class="py-12">
        <div class="container mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Details list</h2>
                    <page size="A4">
                        <article>
                            <table class="nationalid">
                                <tbody>
                                    <tr>
                                        <td width="19%" align="center">
                                            <div align="center"><img src="img/nss-print-logo.png" width="70%"></div>
                                        </td>
                                        <td width="44%">
                                            <div
                                                style="text-align: center; padding-top: 10px; padding-bottom: 10px; font-weight: bold; font-size: 14px; ">
                                                GHANA NATIONAL SERVICE SCHEME<br>
                                                HEADQUARTERS<br>
                                                P.O BOX 46, PATRICE LUMUMBA ROAD<br>
                                                AIRPORT RESIDENTIAL AREA, ACCRA<br>
                                                TELEPHONE: +233-302-772714/769194</div>
                                            <div style="text-align: center; font-weight: bold; font-size: 16px;">ANNUAL
                                                REPORT FORM</div>
                                        </td>
                                        <td width="37%">
                                            <div style="text-align: center; ">
                                                <img src="inc/barcode.php?f=png&amp;s=qr&amp;d=https%3A%2F%2Fportal.nss.gov.gh%2Fqrcodeno-ac036aada614fd3b66970e345469a7ac"
                                                    width="40%">
                                                <img src="https://nss-doc.s3.eu-west-1.amazonaws.com/enrolment17/NSSGCC2994621/NSSGCC2994621134414-passport-photo.jpeg?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAXEX2TIXBOIYIUMHN%2F20220805%2Feu-west-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20220805T171730Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=60&amp;X-Amz-Signature=df7876b83cf4f00bdf44ef2762f66dc5f0087b52c4262be7e4048598485aeb61"
                                                    width="35%">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="address table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="grphead"><strong>PART I: </strong> COMPANY PROFILE</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="nationalid tablebottom">
                                <tbody>
                                    <tr>
                                        <th width="20%" nowrap="nowrap"><strong>1.COMPANY NAME :</strong></th>
                                        <td width="80%">
                                            <div style="text-transform:uppercase"> {{$company->name}}</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="inventory tablebottom">
                                <tbody>
                                    <tr>
                                        <th width="13%" nowrap="nowrap">2. EMAIL:</th>
                                        <td width="45%">{{$company->email}}</td>
                                        <th width="8%" nowrap="nowrap">3. WEBSITE:</th>
                                        <td width="34%">MALE</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="nationalid tablebottom">
                                <tbody>
                                    <tr>
                                        <th width="20%" nowrap="nowrap">4. PHONE NUMBER 1:</th>
                                        <td width="30%">{{$company->phone1}}</td>
                                        <th width="20" nowrap="nowrap">5. PHONE NUMBER 2:</th>
                                        <td width="30%">{{$company->phone2}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="nationalid tablebottom">
                                <tbody>
                                    <tr>
                                        <th width="22%" nowrap="nowrap"><strong>6. MAILING ADDRESS :</strong></th>
                                        <td width="78%">{{$company->mailing_address}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="nationalid tablebottom">
                                <tbody>
                                    <tr>
                                        <th width="35%" nowrap="nowrap"><strong>6. GENERAL DETAILS OF SERVICES/ GOODS
                                                :</strong></th>
                                        <td width="65%">{{$company->details_of_service_goods}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="inventory tablebottom">
                                <tbody>
                                    <tr>
                                        <th width="30%" nowrap="nowrap">7. DATE COMPANY ESTABLISHED :</th>
                                        <td width="20%">{{$company->established_date}}</td>
                                        <th width="25%" nowrap="nowrap">8. GROSS
                                            ANNUAL SALE :</th>
                                        <td width="25%">{{$company->gross_annual_sale}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="address table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="grphead"><strong>PART II: BANK INFORMATION</strong></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="inventory tablebottom">
                                <tbody>
                                    <tr>
                                        <th width="30%" nowrap="nowrap">7. DATE COMPANY ESTABLISHED :</th>
                                        <td width="20%">{{$company->established_date}}</td>
                                        <th width="25%" nowrap="nowrap">8. GROSS
                                            ANNUAL SALE :</th>
                                        <td width="25%">{{$company->gross_annual_sale}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="inventory tablebottom">
                                <tbody>
                                    <tr>
                                        <th colspan="8">8. HAS SERVICE PERSONNEL BEEN AT POST THROUGHOUT, SINCE DATE OF
                                            ASSUMPTION?</th>
                                    </tr>
                                    <tr>
                                        <th width="16%" nowrap="nowrap">&nbsp;</th>
                                        <td width="16%" nowrap="nowrap"><input type="radio" name="radio" id="radio"
                                                value="radio">
                                            <label for="radio">YES</label>
                                        </td>
                                        <td width="11%"><input type="radio" name="radio" id="radio" value="radio">
                                            <label for="radio">NO</label>
                                        </td>
                                        <td width="11%">&nbsp;</td>
                                        <th width="6%">FROM</th>
                                        <td width="17%"></td>
                                        <th width="4%">TO</th>
                                        <td width="19%"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="inventory tablebottom">
                                <tbody>
                                    <tr>
                                        <th width="30%" nowrap="nowrap">9. IF NO, FOR HOW LONG<br>
                                            HAS HE/SHE BEEN ABSENT?</th>
                                        <td width="26%">&nbsp;</td>
                                        <th width="31%">WAS HE/SHE GRANTED PERMISSION?</th>
                                        <td width="6%" nowrap="nowrap"><input type="radio" name="radio" id="radio"
                                                value="radio">
                                            <label for="radio">YES</label>
                                        </td>
                                        <td width="7%" nowrap="nowrap"><input type="radio" name="radio" id="radio"
                                                value="radio">
                                            <label for="radio">NO</label>
                                        </td>
                                        <td width="7%" nowrap="nowrap">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="inventory table">
                                <tbody>
                                    <tr>
                                        <th width="40%">10. HOW DO YOU GRADE HIM IN THE FOLLOWING</th>
                                        <th width="15%">
                                            <div style="text-align: center;">VERY GOOD</div>
                                        </th>
                                        <th width="10%">
                                            <div style="text-align: center;">GOOD</div>
                                        </th>
                                        <th width="15%">
                                            <div style="text-align: center;">SATISFACTORY</div>
                                        </th>
                                        <th width="15%">UNSATISFACTORY</th>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <th width="60%">(A) CONDUCT &amp; GENERAL BEHAVIOUR</th>
                                        <td>
                                            <div style="text-align: center"><input type="checkbox" name="checkbox"
                                                    id="checkbox"></div>
                                        </td>
                                        <td>
                                            <div style="text-align: center"><input type="checkbox" name="checkbox"
                                                    id="checkbox"></div>
                                        </td>
                                        <td>
                                            <div style="text-align: center"><input type="checkbox" name="checkbox"
                                                    id="checkbox"></div>
                                        </td>
                                        <td>
                                            <div style="text-align: center">
                                                <input type="checkbox" name="checkbox2" id="checkbox2">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                    </tr>
                                    <tr>
                                        <th width="60%">(B) PUNCTUALITY AND REGULARITY AT WORK</th>
                                        <td>
                                            <div style="text-align: center"><input type="checkbox" name="checkbox"
                                                    id="checkbox"></div>
                                        </td>
                                        <td>
                                            <div style="text-align: center"><input type="checkbox" name="checkbox"
                                                    id="checkbox"></div>
                                        </td>
                                        <td>
                                            <div style="text-align: center"><input type="checkbox" name="checkbox"
                                                    id="checkbox"></div>
                                        </td>
                                        <td>
                                            <div style="text-align: center">
                                                <input type="checkbox" name="checkbox2" id="checkbox2">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="60%">(C) INITIATIVE AND SELF CONFIDENCE</th>
                                        <td>
                                            <div style="text-align: center"><input type="checkbox" name="checkbox"
                                                    id="checkbox"></div>
                                        </td>
                                        <td>
                                            <div style="text-align: center"><input type="checkbox" name="checkbox"
                                                    id="checkbox"></div>
                                        </td>
                                        <td>
                                            <div style="text-align: center"><input type="checkbox" name="checkbox"
                                                    id="checkbox"></div>
                                        </td>
                                        <td>
                                            <div style="text-align: center">
                                                <input type="checkbox" name="checkbox2" id="checkbox2">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="60%">(D) PROFESSIONAL PROFECIENCY</th>
                                        <td>
                                            <div style="text-align: center"><input type="checkbox" name="checkbox"
                                                    id="checkbox"></div>
                                        </td>
                                        <td>
                                            <div style="text-align: center"><input type="checkbox" name="checkbox"
                                                    id="checkbox"></div>
                                        </td>
                                        <td>
                                            <div style="text-align: center"><input type="checkbox" name="checkbox"
                                                    id="checkbox"></div>
                                        </td>
                                        <td>
                                            <div style="text-align: center">
                                                <input type="checkbox" name="checkbox2" id="checkbox2">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>
                                            <div style="font-weight: bold;">11. ADDITIONAL REMARKS</div>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="tablebottom">
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>
                                            <div style="font-weight: bold;">12. IN THE LIGHT OF YOUR ASSESSMENT, DO YOU
                                                RECOMMEND THIS PERSONNEL
                                                FOR THE AWARD OF CERTIFICATE
                                            </div>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="tablebottom">
                                <tbody>
                                    <tr>
                                        <td width="38%"><label for="checkbox3">(a) NATIONAL SERVICE CERTIFICATE </label>
                                            <input type="checkbox" name="checkbox3" id="checkbox3">
                                        </td>
                                        <td width="62%"><label for="checkbox2">(b) NO CERTFICATE </label>
                                            <input type="checkbox" name="checkbox4" id="checkbox2">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="nationalid table">
                                <tbody>
                                    <tr>
                                        <th width="22%" nowrap="nowrap"><strong>NAME OF SUPERVISOR:</strong></th>
                                        <td width="33%">&nbsp;</td>
                                        <th width="26%" nowrap="nowrap"><strong>SIGNATURE OF SUPERVISOR</strong></th>
                                        <td width="19%">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="nationalid tablebottom">
                                <tbody>
                                    <tr>
                                        <th width="22%" nowrap="nowrap"><strong> POSITION:</strong></th>
                                        <td width="78%">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table width="39%" class="meta table">
                                <tbody>
                                    <tr>
                                        <th colspan="2" nowrap="nowrap">
                                            <div style="font-size: 14px;">OFFICIAL STAMP
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="2" nowrap="nowrap">&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <th colspan="2" nowrap="nowrap">&nbsp;</th>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="photo table">
                                <tbody>
                                    <tr>
                                        <th colspan="2">
                                            <div style="font-size: 14px;">DATE</div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="2">&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <th colspan="2">&nbsp;</th>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>
                                            <div style="font-weight: bold;">PART III - COMMENTS BY SERVICE PERSONNEL (IF
                                                ANY)</div>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="tablebottom">
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </article>
                        <aside>
                            <table class="photo ">

                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <div style="text-align: right;"><img
                                                    src="inc/barcode.php?f=png&amp;s=code-39&amp;d=NSSGCC2994621"
                                                    height="70px"></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="address">
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </aside>
                    </page>
                </div>
            </div>
        </div>
    </div>


    <style>
    /* reset */

    * {
        border: 0;
        box-sizing: content-box;
        color: inherit;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        font-weight: inherit;
        line-height: inherit;
        list-style: none;
        margin: 0;
        padding: 0;
        text-decoration: none;
        vertical-align: top;
    }


    h1 {
        font: bold 100% sans-serif;
        letter-spacing: 0.5em;
        text-align: center;
        text-transform: uppercase;
    }

    /* table */

    table {
        font-size: 75%;
        table-layout: fixed;
        width: 100%;
    }

    table.table {
        border-collapse: separate;
        border-spacing: 1px;
        border-width: 1px;
        border-color: #000;
        border-style: solid;
    }

    table.tablebottom {
        border-collapse: separate;
        border-spacing: 1px;
        border-right-width: 1px;
        border-bottom-width: 1px;
        border-left-width: 1px;
        border-top-width: 1px;
        border-right-style: solid;
        border-bottom-style: solid;
        border-left-style: solid;
        border-top-style: solid;
        border-right-color: #000000;
        border-bottom-color: #000000;
        border-left-color: #000000;
        border-top-color: #FFF;
    }

    table.borderless {
        border-collapse: separate;
        border-spacing: 1px;
        border-right-width: 1px;
        border-bottom-width: 1px;
        border-left-width: 1px;
        border-top-style: none;
        border-right-style: solid;
        border-bottom-style: solid;
        border-left-style: solid;
        border-right-color: #FFF;
        border-bottom-color: #FFF;
        border-left-color: #FFF;
    }

    th,
    td {
        border-width: 0px;
        padding: 0.5em;
        position: relative;
        text-align: left;
    }

    th.noborder,
    td.noborder {
        border-color: #000;
        border-width: 1px;
        padding: 0.5em;
        position: relative;
        text-align: left;
    }

    th,
    td {
        border-radius: 0.25em;
        border-style: solid;
    }

    /*th { background: #EEE; border-color: #BBB; } 
*/
    td {
        border-color: #DDD;
    }


    page {
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5cm;
        background-color: white;
        padding: 0.5in;
        border-color: #000;
        border-bottom-style: solid;
        border: 1px;
    }

    page[size="A4"] {
        width: 21cm;
        height: 30.1cm;
    }

    page[size="A4"][layout="portrait"] {
        width: 29.7cm;
        height: 21cm;
    }

    /* header */

    header {
        margin-top: 0;
        margin-right: 0;
        margin-left: 0;
        /* [disabled]margin-bottom: 3em; */
    }

    header:after {
        clear: both;
        content: "";
        display: table;
    }

    header h1 {
        background: #000;
        border-radius: 0.25em;
        color: #FFF;
        margin: 0 0 1em;
        padding: 0.5em 0;
    }

    header address {
        float: left;
        font-size: 75%;
        font-style: normal;
        line-height: 1.25;
        margin: 0 1em 1em 0;
    }

    header address p {
        margin: 0 0 0.25em;
    }

    header span,
    header img {
        display: block;
        float: right;
    }

    header span {
        margin: 0 0 1em 1em;
        max-height: 25%;
        max-width: 60%;
        position: relative;
    }

    header img {
        max-height: 100%;
        max-width: 100%;
    }

    header input {
        cursor: pointer;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        height: 100%;
        left: 0;
        opacity: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }

    /* article */
    article {
        border-color: #000;
        border-bottom-style: solid;
        border: 1px;
    }

    article,
    article address,
    table.meta,
    table.inventory {
        margin: 0px;
    }

    article:after {
        clear: both;
        content: "";
        display: table;
    }

    article h1 {
        clip: rect(0 0 0 0);
        position: absolute;
    }

    article address {
        float: left;
        font-size: 125%;
        font-weight: bold;
    }

    /* table meta & balance */
    table.photo {
        float: right;
        width: 42%;
    }

    table.meta,
    table.balance {
        float: left;
        width: 40%;
    }

    table.meta:after,
    table.photo:after,
    table.balance:after {
        clear: both;
        content: "";
        display: table;
    }

    /* table meta */

    table.meta th {
        width: 40%;
    }

    table.meta td {
        width: 60%;
    }

    /* table items */

    table.inventory,
    table.address,
    table.language,
    table.digital {
        clear: both;
        width: 100%;
    }

    table.inventory th,
    table.address th,
    table.language th,
    table.digital th,
    table.nationalid th {
        font-weight: bold;
        /*text-align: right;*/
    }

    table.inventory td:nth-child(1) {
        text-align: right;
        width: 22%;
    }

    table.inventory td:nth-child(2) {
        width: 28%;
    }

    table.inventory td:nth-child(3) {
        text-align: right;
        width: 22%;
    }

    table.inventory td:nth-child(4) {
        width: 28%;
    }

    table.language td:nth-child(1) {
        text-align: right;
        width: 10%;
    }

    table.language td:nth-child(2) {
        width: 23%;
    }

    table.language td:nth-child(3) {
        text-align: right;
        width: 10%;
    }

    table.language td:nth-child(4) {
        width: 23%;
    }

    table.language td:nth-child(3) {
        text-align: right;
        width: 10%;
    }

    table.language td:nth-child(4) {
        width: 23%;
    }

    table.address td:nth-child(1) {
        width: 22%;
    }

    table.address td:nth-child(2) {
        width: 78%;
    }

    table.digital td:nth-child(1) {
        text-align: right;
        width: 25%;
    }

    table.digital td:nth-child(2) {
        width: 25%;
    }

    table.digital td:nth-child(3) {
        text-align: right;
        width: 25%;
    }

    table.digital td:nth-child(4) {
        width: 25%;
    }

    /* table balance */

    table.balance th,
    table.balance td {
        width: 50%;
    }

    table.balance td {
        text-align: right;
    }

    /* aside */
    aside {
        margin-top: 10px;
        font-size: 13px;
    }

    aside h1 {
        border: none;
        border-width: 0 0 1px;
        margin: 0 0 1em;
    }

    aside h1 {
        border-color: #999;
        border-bottom-style: solid;
    }

    .grphead {
        font-weight: bolder;
        font-size: 15px;
        text-align: center;
    }



    @page {
        size: A4;
        margin: 0;
    }

    @media print {
        .page {
            margin: 0;
            border: 0;
            width: 21cm;
            min-height: 29.0cm;
            page-break-after: always;
        }

        .hidden {
            display: none;
        }
    }

    @media print {
        * {
            -webkit-print-color-adjust: exact;
        }

        .page-break {
            display: block;
            page-break-before: always;
        }

        html {
            background: none;
        }

        body {
            box-shadow: none;
        }

        span:empty {
            display: none;
        }

        .add,
        .cut {
            display: none;
        }

    }
    </style>
</x-app-layout>