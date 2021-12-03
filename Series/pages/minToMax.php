<?php include './includes/header.php '?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Min to Max Number</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3">Starting Number:</label>
                                <div class="col-md-9">
                                    <input type="number" name="starting_number" class="form-control"/>
                                   
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3">Ending Number :</label>
                                <div class="col-md-9">
                                    <input type="number" name="ending_number" class="form-control"/>
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label for="" class="col-form-label col-md-3">Incr or Decr :</label>
                                <div class="col-md-9">
                                    <input type="number" name="incr_decr" class="form-control"/>
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3">Result :</label>
                                <div class="col-md-9">
                                   <textarea name="" id="" cols="5" rows="5" class="form-control"><?php echo isset($result) ? $result :'' ;  ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" value="SUBMIT" class="btn btn-outline-success btn-block"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include './includes/footer.php '?>