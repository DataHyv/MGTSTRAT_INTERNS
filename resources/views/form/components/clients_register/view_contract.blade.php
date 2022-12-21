<!-- Modal -->
<div class="modal fade" id="contractModal" tabindex="-1" aria-labelledby="contractModalLabel" aria-hidden="true">
    {{-- modal-dialog-centered --}}
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="contractModalLabel">Contract Records</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- <form> --}}

            {{-- Start Insert Client --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">

                            {{-- <div class="d-flex justify-content-center mb-5">
                                <select name="engagement_titles" id="engagement_titles" value="">
                                    <option selected>- Select Title -</option>
                                    <option value="test-1">Test 1</option>
                                    <option value="test-2">Test 2</option>
                                    <option value="test-3">Test 3</option>
                                </select>
                            </div> --}}

                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <a href=""></a>
                                    <th scope="col">#</th>
                                    <th scope="col">Contract ID</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Engagement Title</th>
                                    <th scope="col">Contract Price</th>
                                  </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data2 as $key => $client)
                                        <tr>
                                            <th scope="row">{{ $key+1 }}</th>
                                            <td>{{ $client->cstmzd_eng_form_id }}</td>
                                            <td class="name">
                                                {{$client->client->company_name}}
                                            </td>
                                            <td>{{$client->engagement_title}}</td>
                                            <td>{{$client->Engagement_fees_total}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>

                                {{-- <tbody class="d-none" id="test-1">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="name">CSTMZD_000001</td>
                                        <td class="name">MGT_STRAT</td>
                                        <td class="name">Test 1</td>
                                        <td class="name">100,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="name">CSTMZD_000001-001</td>
                                        <td class="name">MGT_STRAT</td>
                                        <td class="name">Test 1</td>
                                        <td class="name">50,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="name">CSTMZD_000001-002</td>
                                        <td class="name">MGT_STRAT</td>
                                        <td class="name">Test 1</td>
                                        <td class="name">50,000</td>
                                    </tr>
                                    <tr class="table-active">
                                        <th scope="row"></th>
                                        <td class="name"></td>
                                        <td class="name"></td>
                                        <td class="font-weight-bold text-center">Total </td>
                                        <td class="name">200,000</td>
                                    </tr>
                                </tbody>

                                <tbody class="d-none" id="test-2">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="name">CSTMZD_000002</td>
                                        <td class="name">MGT_STRAT</td>
                                        <td class="name">Test 2</td>
                                        <td class="name">200,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="name">CSTMZD_000002-001</td>
                                        <td class="name">MGT_STRAT</td>
                                        <td class="name">Test 2</td>
                                        <td class="name">100,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="name">CSTMZD_000002-002</td>
                                        <td class="name">MGT_STRAT</td>
                                        <td class="name">Test 2</td>
                                        <td class="name">100,000</td>
                                    </tr>
                                    <tr class="table-active">
                                        <th scope="row"></th>
                                        <td class="name"></td>
                                        <td class="name"></td>
                                        <td class="font-weight-bold text-center">Total </td>
                                        <td class="name">400,000</td>
                                    </tr>
                                </tbody>

                                <tbody class="d-none" id="test-3">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="name">CSTMZD_000003</td>
                                        <td class="name">MGT_STRAT</td>
                                        <td class="name">Test 3</td>
                                        <td class="name">100,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="name">CSTMZD_000002-001</td>
                                        <td class="name">MGT_STRAT</td>
                                        <td class="name">Test 3</td>
                                        <td class="name">100,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="name">CSTMZD_000002-002</td>
                                        <td class="name">MGT_STRAT</td>
                                        <td class="name">Test 3</td>
                                        <td class="name">100,000</td>
                                    </tr>
                                    <tr class="table-active">
                                        <th scope="row"></th>
                                        <td class="name"></td>
                                        <td class="name"></td>
                                        <td class="font-weight-bold text-center">Total </td>
                                        <td class="name">300,000</td>
                                    </tr>
                                </tbody> --}}

                              </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#engagement_titles').on('change', function() {
            // alert( this.value );
            if ($(this).val() === 'test-1') {
                $("#test-1").removeClass("d-none");
                $("#test-2").addClass("d-none");
                $("#test-3").addClass("d-none");
            }
            else if ($(this).val() === 'test-2') {
                $("#test-1").addClass("d-none");
                $("#test-3").addClass("d-none");
                $("#test-2").removeClass("d-none");
            }
            else if ($(this).val() === 'test-3') {
                $("#test-1").addClass("d-none");
                $("#test-2").addClass("d-none");
                $("#test-3").removeClass("d-none");
            }
            else {
                $("#test-1").addClass("d-none");
                $("#test-2").addClass("d-none");
                $("#test-3").addClass("d-none");
            }
        });
    });
</script>
