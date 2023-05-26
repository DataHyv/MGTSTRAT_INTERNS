<!------------ CARD HEADER ------------>
<div class="card-header">
    <h4 class="card-title"  style="display: inline;">Profit Forecast</h4>
    <div style="float:right">
        <button class="btn btn-secondary mx-0 js-btn-prev" type="button" title="Prev">Prev</button>
        @if($data)                                                    
            @if($data->cstmzd_eng_form_id)
                <button class="btn btn-success mx-0 js-btn-next" type="submit" title="Submit">Save</button>
            @endif
        @else
                <button class="btn btn-success mx-0 js-btn-next" type="submit" title="Submit">Submit</button>
        @endif
    </div>
</div>
<!------------ END CARD HEADER ------------>

<!------------ FORM BODY ------------>
    <div class="form-body">
        <section>
            <div class="table-responsive-md" id="no-more-tables">
                <table class="table table-bordered table-hover">
                    <tbody class="th-blue-grey-lighten-2">
                        {{-- PROFIT --}}
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

                        {{-- LESS CONTRI. TO OVERHEAD --}}
                        <tr>
                            <td class="profit-forecast-start text-dark" scope="col" width=20%>
                                <h6>LESS: CONTRIBUTION TO OVERHEAD</h6>
                            </td>
                            <td class="profit-forecast-middle table-danger" scope="col" width=14%>
                                <fieldset>
                                    <select class="input js-mytooltip form-select @error('') is-invalid @enderror" 
                                    name="lesscto_noc" id="lesscto_noc" style="background-color:#ffcccc; color:red;">
                                        <option value="35" {{ old('') == '35' ? 'selected="selected"' : '' }} selected>
                                            35%
                                        </option>
                                        <option value="15" {{ old('') == '15' ? 'selected="selected"' : '' }}>
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

                        {{-- NET PROFIT --}}
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

                        {{-- PROFIT MARGIN --}}
                        <tr>
                            <td class="profit-forecast-start text-dark" scope="col" width=20%>
                                <h6>PROFIT MARGIN</h6>
                            </td>
                            <td class="profit-forecast-middle" scope="col"></td>
                            <td class="profit-forecast-middle" scope="col" width=15%></td>
                            <td class="profit-forecast-middle" scope="col"></td>
                            <td class="profit-forecast-middle" scope="col"width=10%></td>
                            <td class="profit-forecast-middle text-center mgt-td-dark-bg table-success" scope="col" width=15% id="profitMargin-td">
                                <h5 id="ProfitMargin" class="text-danger">-</h5>
                            </td>
                            <td class="profit-forecast-end" scope="col" width=15%></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
<!------------ END OF FORM BODY ------------>

<script>
    $('input[type="number"]').on('input', function () {
        this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null
    });
    $('input[type="number"]').attr('min', '0');
</script>
@if($data)
    @if($data->cstmzd_eng_form_id)
        <script>
            $(document).ready( function () {
                document.getElementById('lesscto_noc').value = '{{ $data->less_contri_to_overhead }}';
            } );
        </script>
    @endif
@endif