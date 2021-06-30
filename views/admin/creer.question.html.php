<style>
    body {
        margin: 0px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-3"><?php require_once(ROUTE_DIR . "views/inc/menu.html.php"); ?>
        </div>
        <div class="col-md-6" style="margin-left:515px;margin-top:-455px;"><br /><br />
        <form method="post" action="<?=WEB_ROUTE ?>" >
        <input type="hidden" name="controllers" value="admin">
        <input type="hidden" name="action" value="create.question">

            <div class="gana" style="border:1px solid red">



                <p style="font-size:19px;color:black;margin-left:40px;margin-top:110px">QUESTIONS</p>
                <div style="margin-left:300px">
                    <label for="name"></label>
                    <input style="margin-top:-75px;width:350px;height:30px" type="text" id="name" name="question">
                    <small class="text">
                    <?=isset($arrayError['question']) ? $arrayError['question'] : ''; ?>
                    </small>
                </div>
                <p style="font-size:19px;color:black;margin-left:40px;margin-top:60px">NOMBRE DE POINTS</p>
                <div style="margin-left:300px">
                    <label for="name"></label>
                    <input style="margin-top:-75px;width:150px;height:30px" type="number" id="name" name="point">
                    <small class="text">
                    <?=isset($arrayError['point']) ? $arrayError['point'] : ''; ?>
                    </small>
                </div>
                <p style=" font-size:19px;color:black;margin-left:40px;margin-top:110px">NOMBRE DE REPONSE</p>
                    <div style="margin-left:300px">
                        <label for="name"></label>
                        <input style="margin-top:-75px;width:350px;height:50px" type="text" id="name" name="nbr_reps">
                        <small class="text" id="helpId" class="form-text text-danger">
                            <?php echo isset($arrayError['nbr_reps']) ? $arrayError['nbr_reps'] : ''; ?>
                        </small>
                        <button type=" submit" style=" margin-left:400px;margin-top:-75;width:55px;height:40px" name="btn_plus">

                            <img style="width:30px;height:30px" src=" <?= "https://t4.ftcdn.net/jpg/01/26/10/59/240_F_126105961_6vHCTRX2cPOnQTBvx9OSAwRUapYTEmYA.jpg" ?>" alt=" icone">
                        </button>
                    </div>
                    <br><br><br><br>
                    <?php $nbr_reps = $_SESSION['nbr_reps']; ?>
                    <?php for ($i = 1; $i <= $nbr_reps; $i++) : ?>
                        <div class="form-group ml-4">
                            <label for="">REPONSE<?= $i ?></label>
                            <div class="row">
                                <div class="col-6 ml-4">
                                    <input type="text" name="reponse<?= $i ?>" id="" class="form-control bg-white" placeholder="" aria-describedby="helpId" value="<?= isset($question['reponde']) ? $question['reponse'] : '' ?>">
                                    <small class="text" id="helpId" class="form-text text-danger">
                                        <?php echo isset($arrayError['reponse']) ? $arrayError['reponse'] : ''; ?>
                                    </small>
                                </div>
                                <div class="col-4">
                                    <input type="checkbox" class="form-check-input checks" name="bon_reponse<?= $i ?> " id="" value="bonne reponse">
                                    <input type="radio" name="bon_reponse" class="ml-5 mt-2" id="">
                                </div>
                            </div>
                        </div>
                    <?php endfor  ?>
                </div>


                <button type=" submit" style="color:white;background-color:red;width:150px;height:50px;margin-top:-100px;margin-left:400px" class="btn btn-danger" name="btn_submit">ENREGISTER</button>
    </div>
    </form>
    <style>
        .text{
        color: red;
    }
    </style>
        
