<!------------ CARD HEADER ------------>
<div class="card-header">
    <h4 class="card-title">Profit Forecast</h4>
</div>
<!------------ END CARD HEADER ------------>

<!------------ FORM BODY ------------>

{{-- nyaaa form --}}

<!------------ END OF FORM BODY ------------>

<script>
    $('input[type="number"]').on('input', function () {
        this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null
    });

    $('input[type="number"]').attr('min', '0');
</script>