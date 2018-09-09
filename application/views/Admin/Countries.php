<br/>
<h2><?php echo $title; ?></h2>
<br/>
<div class="row justify-content-md-center justify-content-md-center">
    <table class="table table-sm table-striped table-hover" style="width: 70% !important;margin: auto;text-align: center; ">
        <caption>List of Countries</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($countries as $country_list): ?>
                <tr>
                    <th scope="row"><?php echo $country_list['id']; ?></th>
                    <td><?php echo $country_list['Country']; ?></td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditCountryModal" data-whatever="<?php echo $country_list['Country']; ?>">Edit</button></td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>
            <?php endforeach; ?>
       <?php  echo form_open('countries/create'); ?>
            <tr  class="form-group">
                <th> <label for="exampleInputEmail1">Add Country Name</label></th>
                <td><input type="email" class="form-control" id="AddCountryName" name="CountryName" placeholder="Enter Country Name"></td>
                <td> <button type="submit" value="Add Country" class="btn btn-primary">Add</button></td>
            </tr>
        </form>
        </tbody>
    </table>
</div>
<div class="modal fade" id="EditCountryModal" tabindex="-1" role="dialog" aria-labelledby="Edit Countries" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CountryModalLabel">Edit Country</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Country-Name:</label>
                        <input type="text" class="form-control" id="country-name">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>

<script  type="text/javascript">
    $('#EditCountryModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var country = button.data('whatever'); // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        modal.find('.modal-title').text('Editing country: ' + country);
        modal.find('.modal-body input').val(country);
    });
</script>