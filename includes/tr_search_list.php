<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    .row-padding {
    margin-top: 25px;
    margin-bottom: 25px;
}

.card {  
  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

</style>

<div class="container" >
    <br>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <input type="search" id="search" value="" class="form-control" placeholder="Search tr">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <table class="table card" id="table" style="width: 80%">
                <thead style="background-color: #6c7ae0;">
                    <tr>
                        <th>TR No</th>
                        <th>Equipment</th>
                        <th>Designation</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="tr/TR-871.pdf">871</a></td>
                        <td><a href="tr/TR-871.pdf">Condensate pump 02</a></td>
                        <td>Sub-Assistant Engineer</td>
                        <td>Complete</td>
                        <td>20-Dec-19</td>
                    </tr>

                    <tr>
                        <td><a href="tr/TR-872.pdf">872</a></td>
                        <td><a href="tr/TR-872.pdf">Diverter damper</a></td>
                        <td>Sub-Assistant Engineer</td>
                        <td>Complete</td>
                        <td>20-Dec-19</td>
                    </tr>

                    <tr>
                        <td><a href="tr/TR-889.pdf">889</a></td>
                        <td><a href="tr/TR-889.pdf">CTCS A&B</a></td>
                        <td>Sub-Assistant Engineer</td>
                        <td>Complete</td>
                        <td>22-Jan-20</td>
                    </tr>
                     <tr>
                        <td><a href="tr/TR-892.pdf">892</a></td>
                        <td><a href="tr/TR-892.pdf">Gt generator seal oil supply</a></td>
                        <td>Sub-Assistant Engineer</td>
                        <td>In-Progress</td>
                        <td>04-Feb-20</td>
                    </tr>
                     <tr>
                        <td><a href="tr/TR-895.pdf">895</a></td>
                        <td><a href="tr/TR-895.pdf">Shell-2</a></td>
                        <td>Sub-Assistant Engineer</td>
                        <td>Complete</td>
                        <td>07-Feb-20</td>
                    </tr> 

                    
                    </tr>
                    
                </tbody>
            </table>
          
        </div>
    </div>

</div>



<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
<script type="text/javascript">
    $(function () {
    $( '#table' ).searchable({
        striped: true,
        oddRow: { 'background-color': '#f5f5f5' },
        evenRow: { 'background-color': '#fff' },
        searchType: 'fuzzy'
    });
    
    $( '#searchable-container' ).searchable({
        searchField: '#container-search',
        selector: '.row',
        childSelector: '.col-xs-4',
        show: function( elem ) {
            elem.slideDown(100);
        },
        hide: function( elem ) {
            elem.slideUp( 100 );
        }
    })
});
</script>