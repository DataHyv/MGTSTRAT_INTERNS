<!------------ CARD HEADER ------------>
<div class="card-header">
    <h4 class="card-title">Profit Forecast</h4>
</div>
<!------------ END CARD HEADER ------------>

<!------------ FORM BODY ------------>
    <div class="form-body container">
        <section>
            <div class="table-responsive-md" id="no-more-tables">
                <table class="table table-bordered table-hover">
                    <tbody>
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
                                <h5 id="Profit">-</h5>
                            </td>
                            <td class="profit-forecast-end" scope="col" width=15%></td>
                        </tr>

                        {{-- LESS CONTRI. TO OVERHEAD --}}
                        <tr>
                            <td class="profit-forecast-start text-dark" scope="col" width=20%>
                                <h6>LESS: CONTRIBUTION TO OVERHEAD</h6>
                            </td>
                            <td class="profit-forecast-middle" scope="col" width=14%>
                                <fieldset>
                                    <select class="input js-mytooltip form-select @error('') is-invalid @enderror" name="pf_lcto" id="LessCTO_NOC"
                                        data-mytooltip-content="<i>
                                            35% Standard, <br>
                                            15% for NGO's 
                                            </i>"
                                        data-mytooltip-theme="dark"
                                        data-mytooltip-action="focus" 
                                        data-mytooltip-direction="right"
                                        style="background-color:#ffcccc; color:red;">
                                        <option value="35" {{  $coachings->pf_lcto == '35' ? 'selected="selected"' : '' }} selected>
                                            35%
                                        </option>
                                        <option value="15" {{  $coachings->pf_lcto == '15' ? 'selected="selected"' : '' }}>
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
                                <h5 id="LessContributionToOverhead">-</h5>
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
                                <h5 id="NetProfit">-</h5>
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
                            <td class="profit-forecast-middle text-center" scope="col" width=15%>
                                <h5 id="ProfitMargin">-</h5>
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
