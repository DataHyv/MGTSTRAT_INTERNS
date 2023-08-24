<div class="card-header">
    <h4 class="card-title" style="display: inline;">Profit Forecast</h4>
    <div style="float:right">
        <button class="btn btn-secondary mx-0 js-btn-prev" type="button" title="Prev">Prev</button>             
        @if($parentInfoList)                                                    
            <button class="btn btn-success mx-0 js-btn-next" type="button" title="Submit" onclick="validate_required_field();">Save</button>   
        @else
            <button class="btn btn-success mx-0 js-btn-next" type="button" title="Submit" onclick="validate_required_field()">Submit</button>
        @endif
    </div>
</div>
<div class="form-body">
    <section>
        <div class="table-responsive-md" id="no-more-tables">
            <table class="table table-bordered table-hover">
                <tbody class="th-blue-grey-lighten-2">
                    <tr>
                        <td class="profit-forecast-start text-dark" scope="col" width=20%>
                            <h6>PROFIT</h6>
                        </td>
                        <td class="profit-forecast-middle" scope="col" width=10%></td>
                        <td class="profit-forecast-middle" scope="col"></td>
                        <td class="profit-forecast-middle" scope="col"></td>
                        <td class="profit-forecast-middle" scope="col" width=10%></td>
                        <td class="profit-forecast-middle text-center" scope="col" width=15%>
                            <h5 id="Profit" class="text-danger">-</h5>
                        </td>
                        <td class="profit-forecast-end" scope="col" width=15%></td>
                    </tr>

                    <tr>
                        <td class="profit-forecast-start text-dark" scope="col" width=20%>
                            <h6>LESS:  35% CONTRIBUTION TO OVERHEAD</h6>
                        </td>
                        <td class="profit-forecast-middle table-danger" scope="col" width=14%>
                            <fieldset>
                                <select class="input js-mytooltip form-select @error('') is-invalid @enderror" name="lesscto_noc" id="LessCTO_NOC"
                                    data-mytooltip-content="<i>
                                        35% Standard, <br>
                                        15% for NGO's
                                        </i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus"
                                    data-mytooltip-direction="right"
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="35" {{ old('') == '35' ? 'selected="selected"' : '' }} selected>
                                        35%
                                    </option>
                                    <option value="15" {{ old('') == '15' ? 'selected="selected"' : '' }} >
                                        15%
                                    </option>
                                </select>
                                @error('ef_customFee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </td>
                        <td class="profit-forecast-middle" scope="col" width=15%></td>
                        <td class="profit-forecast-middle" scope="col"></td>
                        <td class="profit-forecast-middle" scope="col" width=10%></td>
                        <td class="profit-forecast-middle text-center" scope="col" width=15%>
                            <h5 id="LessContributionToOverhead" class="text-danger">-</h5>
                        </td>
                        <td class="profit-forecast-end" scope="col" width=15%></td>
                    </tr>

                    <tr>
                        <td class="profit-forecast-start text-dark" scope="col" width=20%>
                            <h6>NET PROFIT</h6>
                        </td>
                        <td class="profit-forecast-middle" scope="col"></td>
                        <td class="profit-forecast-middle" scope="col" width=15%></td>
                        <td class="profit-forecast-middle" scope="col"></td>
                        <td class="profit-forecast-middle" scope="col"width=10%></td>
                        <td class="profit-forecast-middle text-center" scope="col" width=15%>
                            <h5 id="NetProfit" class="text-danger">-</h5>
                        </td>
                        <td class="profit-forecast-end" scope="col" width=15%></td>
                    </tr>

                    <tr>
                        <td class="profit-forecast-start text-dark" scope="col" width=20%>
                            <h6 >PROFIT MARGIN</h6>
                        </td>
                        <td class="profit-forecast-middle" scope="col"></td>
                        <td class="profit-forecast-middle" scope="col" width=15%></td>
                        <td class="profit-forecast-middle" scope="col"></td>
                        <td class="profit-forecast-middle" scope="col"width=10%></td>
                        <td class="profit-forecast-middle text-center mgt-td-dark-bg" id="profitMargin-td" scope="col" width=15%>
                            <h5 id="ProfitMargin" class="text-danger">-</h5>
                        </td>
                        <td class="profit-forecast-end" scope="col" width=15%></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>

@if($parentInfoList)
    <script>
        document.getElementById('LessCTO_NOC').value = '{{ $parentInfoList->less_contri_to_overhead }}';
    </script>
@endif