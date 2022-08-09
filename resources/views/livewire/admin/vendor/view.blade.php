<div>
    <page size="A4">
        <article>
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
            <table class="nationalid tablebottom">
                <tbody>
                    <tr>
                        <th width="10%" nowrap="nowrap">2. EMAIL :</th>
                        <td width="40%">{{$company->email}}</td>
                        <th width="15%" nowrap="nowrap">3. WEBSITE :</th>
                        <td width="35%">MALE</td>
                    </tr>
                </tbody>
            </table>
            <table class="nationalid tablebottom">
                <tbody>
                    <tr>
                        <th width="20%" nowrap="nowrap">4. PHONE NUMBER 1 :</th>
                        <td width="30%">{{$company->phone1}}</td>
                        <th width="20%" nowrap="nowrap">5. PHONE NUMBER 2 :</th>
                        <td width="30%">{{$company->phone2}}</td>
                    </tr>
                </tbody>
            </table>
            <table class="nationalid tablebottom">
                <tbody>
                    <tr>
                        <th width="20%" nowrap="nowrap"><strong>6. MAILING ADDRESS :</strong></th>
                        <td width="80%">{{$company->mailing_address}}</td>
                    </tr>
                </tbody>
            </table>
            <table class="nationalid tablebottom">
                <tbody>
                    <tr>
                        <th width="35%" nowrap="nowrap"><strong>7. GENERAL DETAILS OF SERVICES/ GOODS
                                :</strong></th>
                        <td width="65%">{{$company->details_of_service_goods}}</td>
                    </tr>
                </tbody>
            </table>
            <table class="inventory tablebottom">
                <tbody>
                    <tr>
                        <th width="30%" nowrap="nowrap">8. DATE COMPANY ESTABLISHED :</th>
                        <td width="20%">{{$company->established_date}}</td>
                        <th width="25%" nowrap="nowrap">9. GROSS
                            ANNUAL SALE :</th>
                        <td width="25%">&cent;{{$company->gross_annual_sale}}</td>
                    </tr>
                </tbody>
            </table>
            <table class="inventory tablebottom">
                <tbody>
                    <tr>
                        <th width="40%">10. LEGAL STRUCTURE :</th>
                        <td width="20%">
                            <div><input type="checkbox" name="checkbox" id="checkbox"> CORPORATION</div>
                        </td>
                        <td width="20%">
                            <div><input type="checkbox" name="checkbox" id="checkbox"> PARTNERSHIP</div>
                        </td>
                        <td width="20%">
                            <div><input type="checkbox" name="checkbox" id="checkbox"> SOLE
                                PROPRIETOSHIP</div>
                        </td>
                    </tr>
                    <tr>
                        <th width="40%"></th>
                        <td width="20%">
                            <div><input type="checkbox" name="checkbox" id="checkbox"> JOINT VENTURE
                            </div>
                        </td>
                        <td width="20%">
                            <div><input type="checkbox" name="checkbox" id="checkbox"> FRANCHISE</div>
                        </td>
                        <td width="20%">
                            <div><input type="checkbox" name="checkbox" id="checkbox"> NON-PROFIT</div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="inventory tablebottom">
                <tbody>
                    <tr>
                        <th width="40%">11. BUSINESS TYPE :</th>
                        <td width="20%">
                            <div><input type="checkbox" name="business_type" id="business_type"
                                    {{$company->business_type === 'retailer' ? 'checked':'disabled'}}>
                                RETAILER</div>
                        </td>
                        <td width="20%">
                            <div><input type="checkbox" name="business_type" id="business_type"
                                    {{$company->business_type === 'manufacturer' ? 'checked':'disabled'}}>
                                MANUFACTURER
                            </div>
                        </td>
                        <td width="20%">
                            <div><input type="checkbox" name="business_type" id="business_type"
                                    {{$company->business_type === 'service provider' ? 'checked':'disabled'}}>
                                SERVICE PROVIDER
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th width="40%"></th>
                        <td width="20%">
                            <div><input type="checkbox" name="business_type" id="business_type"
                                    {{$company->business_type === 'wholesaler' ? 'checked':'disabled'}}>
                                WHOLESALER</div>
                        </td>
                        <td>
                            <div><input type="checkbox" name="business_type" id="business_type"
                                    {{$company->business_type === 'consultant' ? 'checked':'disabled'}}>
                                CONSULTANT</div>
                        </td>
                        <td width="20%">
                            <div><input type="checkbox" name="business_type" id="business_type"
                                    {{$company->business_type === 'construction contractor' ? 'checked':'disabled'}}>
                                CONSTRUCTION
                                CONTRACTOR</div>
                        </td>
                    </tr>
                    <tr>
                        <th width="40%"></th>

                        <td width="20%">
                            <div><input type="checkbox" name="business_type" id="business_type"
                                    {{$company->business_type === 'distributor' ? 'checked':'disabled'}}>
                                DISTRIBUTOR
                            </div>
                        </td>
                        <td width="20%">
                            <div><input type="checkbox" name="business_type" id="business_type"
                                    {{$company->business_type === 'freight / transportation' ? 'checked':'disabled'}}>
                                FREIGHT / TRANSPORTATION</div>
                        </td>
                        <td width="20%">
                            <div><input type="checkbox" name="business_type" id="business_type"
                                    {{$company->business_type === 'other' ? 'checked':'disabled'}}>
                                OTHER
                            </div>
                        </td>
                    </tr>
                    @if($company->business_type === 'other' )
                    <tr>
                        <th></th>
                        <td>
                            <div style="text-transform:uppercase;"><input type="checkbox" name="business_type"
                                    id="business_type" checked>
                                {{$company->other}}
                            </div>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
            <table class="inventory tablebottom">
                <tbody>
                    <tr>
                        <th width="20%" nowrap="nowrap">12. GEOGRAPHIC AREA :</th>
                        <td width="22%">{{$company->geographical_area}}</td>
                        <th width="40%" nowrap="nowrap">13. HAVE YOU PREVIOUSLY WORK WITH IHL? :</th>
                        <td width="9%" nowrap="nowrap">
                            <input type="radio" name="prev_work_status" id="prev_work_status" value="prev_work_status"
                                {{$company->prev_work_status === 'yes' ? 'checked':'disabled'}}>
                            <label for="prev_work_status">YES</label>
                        </td>
                        <td width="9%" nowrap="nowrap">
                            <input type="radio" name="prev_work_status" id="prev_work_status" value="prev_work_status"
                                {{$company->prev_work_status === 'no' ? 'checked':'disabled'}}>
                            <label for="prev_work_status">NO</label>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="inventory tablebottom">
                <tbody>
                    <tr>
                        <th width="15%">14. INSURED? :</th>
                        <td width="9%" nowrap="nowrap">
                            <input type="radio" name="insured" id="insured" value="insured"
                                {{$company->insured === 'yes' ? 'checked':'disabled'}}>
                            <label for="radio">YES</label>
                        </td>
                        <td width="10%" nowrap="nowrap">
                            <input type="radio" name="insured" id="insured" value="insured"
                                {{$company->insured === 'no' ? 'checked':'disabled'}}>
                            <label for="radio">NO</label>
                        </td>
                        <th width="15%">15. BONDED? :</th>
                        <td width="9%" nowrap="nowrap">
                            <input type="radio" name="bonded" id="bonded" value="bonded"
                                {{$company->bonded === 'yes' ? 'checked':'disabled'}}>
                            <label for="radio">YES</label>
                        </td>
                        <td width="9%" nowrap="nowrap">
                            <input type="radio" name="bonded" id="bonded" value="bonded"
                                {{$company->bonded === 'no' ? 'checked':'disabled'}}>
                            <label for="radio">NO</label>
                        </td>
                        <th width="15%">16. LICENSED? :</th>
                        <td width="9%" nowrap="nowrap">
                            <input type="radio" name="licensed" id="licensed" value="licensed"
                                {{$company->licensed === 'yes' ? 'checked':'disabled'}}>
                            <label for="radio">YES</label>
                        </td>
                        <td width="9%" nowrap="nowrap">
                            <input type="radio" name="licensed" id="licensed" value="licensed"
                                {{$company->licensed === 'no' ? 'checked':'disabled'}}>
                            <label for="radio">NO</label>
                        </td>
                    </tr>
                    @if($company->licensed === 'yes' )
                    <tr>
                        <th></th>
                        <td colspan="2"></td>
                        <th></th>
                        <td colspan="2"></td>
                        <th>(PROVIDE NUMBER) :</th>
                        <td colspan="2" width="20%">
                            <div> {{$company->license_number}} </div>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
            <table class="table">
                <tbody>
                    <tr>
                        <th>
                            <div style="font-weight: bold;">17. ADDITIONAL INFORMATION :
                            </div>
                        </th>
                    </tr>
                </tbody>
            </table>
            <table class="tablebottom">
                <tbody>
                    <tr>
                        <td>{{$company->additional_information}}</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <table class="nationalid tablebottom">
                <tbody>
                    <tr>
                        <th width="40%" nowrap="nowrap"><strong>18. TAX IDENTIFICATION NUMBER
                                (TIN) :</strong></th>
                        <td width="60%">{{$company->tin}}</td>
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
            <table class="nationalid tablebottom">
                <tbody>
                    <tr>
                        <th width="20%" nowrap="nowrap"><strong>19. BANK NAME :</strong></th>
                        <td width="80%">
                            <div style="text-transform:uppercase"> {{$company->bank_name}}</div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="nationalid tablebottom">
                <tbody>
                    <tr>
                        <th width="20%" nowrap="nowrap"><strong>20. BANK ADDRESS :</strong></th>
                        <td width="80%">
                            <div style="text-transform:uppercase"> {{$company->bank_address}}</div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="inventory tablebottom">
                <tbody>
                    <tr>
                        <th width="20%" nowrap="nowrap">21. BENEFICIARY NAME :</th>
                        <td width="30%">{{$company->beneficiary_name}}</td>
                        <th width="20%" nowrap="nowrap">22. ACCOUNT NUMBER :</th>
                        <td width="30%">{{$company->account_number}}</td>
                    </tr>
                </tbody>
            </table>
            <table class="address table">
                <tbody>
                    <tr>
                        <td>
                            <div class="grphead"><strong>PART III: CONTACT PERSON</strong></div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="nationalid tablebottom">
                <tbody>
                    <tr>
                        <th width="25%" nowrap="nowrap"><strong>23. CONTACT PERSON NAME :</strong></th>
                        <td width="75%">
                            <div style="text-transform:uppercase"> {{$company->user->name}}</div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="inventory tablebottom">
                <tbody>
                    <tr>
                        <th width="20%" nowrap="nowrap">24. POSITION / TITLE :</th>
                        <td width="30%">{{$company->user->profile->position}}</td>
                        <th width="20%" nowrap="nowrap">25. ACCOUNT NUMBER :</th>
                        <td width="30%">{{$company->user->email}}</td>
                    </tr>
                </tbody>
            </table>
            <table class="inventory tablebottom">
                <tbody>
                    <tr>
                        <th width="20%" nowrap="nowrap">26. PHONE NUMBER 1 :</th>
                        <td width="30%">{{$company->user->profile->phone1}}</td>
                        <th width="20%" nowrap="nowrap">27. PHONE NUMBER 2 :</th>
                        <td width="30%">{{$company->user->profile->phone2}}</td>
                    </tr>
                </tbody>
            </table>
            <table class="inventory tablebottom">
                <tbody>
                    <tr>
                        <th width="35%" nowrap="nowrap">28. ID NUMBER (GHANA CARD ONLY) :</th>
                        <td width="65%">{{$company->user->profile->id_number}}</td>
                    </tr>
                </tbody>
            </table>
            <table class="address table">
                <tbody>
                    <tr>
                        <td>
                            <div class="grphead"><strong>PART IV: OFFICIAL USE</strong></div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="nationalid tablebottom">
                <tbody>
                    <tr>
                        <th width="25%" nowrap="nowrap"><strong>VENDOR NUMBER :</strong></th>
                        <td width="75%">
                            <div style="text-transform:uppercase"> {{$company->vendor_number}}</div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="inventory tablebottom">
                <tbody>
                    <tr>
                        <th width="25%" nowrap="nowrap">DATE APPROVED :</th>
                        <td width="75%">{{$company->date_approved}}</td>
                    </tr>
                </tbody>
            </table>
        </article>
    </page>
</div>

@push('custom-css')
<link rel="stylesheet" href="{{asset('assets/css/table.css')}}">
@endpush