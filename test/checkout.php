<form name="postform" action="form_process.php" method="POST">
	<input type="text" placeholder="Txnid" name="txnid" value="<?php echo $txnid=rand(1000000000000,99999999999999) ?>" class="form-control text-center text-muted validate" required />
	<input type="text" name="amount" value="" placeholder="Amount" class="form-control text-center text-muted validate" required />
	<input type="text" name="firstname" value="" placeholder="Firstname" class="form-control text-center text-muted validate" required />
	<input type="text" name="email" value="" placeholder="Email" class="form-control text-center text-muted validate" required />
	<input type="text" name="phone" value="" placeholder="Phone" class="form-control text-center text-muted validate" required />
	<input type="text" name="productinfo" value="" placeholder="Product info" class="form-control text-center text-muted validate" required />
	<input type="text" name="surl" value="" placeholder="Success URL" class="form-control text-center text-muted validate" required />
	<input type="text" name="furl" value="" placeholder="Faliure URL" class="form-control text-center text-muted validate" required />
	<input type="submit" class="container-fluid text-center text-white validate">
	<input type="reset" class="container-fluid text-center text-white validate">
</form>


<div class="row">
	<div class="optin-container green-body col-lg-4">
    	<div class="cta vision rouned-circle fa-2x justify-content-center my-auto d-flex">VISION</div>

    <form class="form_vision hidden ">
        <!-- <input type="email" id="email" name="email" placeholder="johndoe@gmail.com" /> -->
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </form> 
</div>
<div class="optin-container green-body col-lg-4">
    <div class="cta mission rouned-circle fa-2x justify-content-center my-auto d-flex">MISSION</div>

    <form class="form_mission hidden">
        <!-- <input type="email" id="email" name="email" placeholder="johndoe@gmail.com" /> -->
        <p>
        Our culture is to make top quality paints that stands you out among the rest. To achieve this, we have up to date technology at our disposal to offer best quality paint at affordable prices.
    </p>
    </form> 
</div>
<div class="optin-container green-body col-lg-4">
    <div class="cta products rouned-circle fa-2x justify-content-center my-auto d-flex">OUR PRODUCTS</div>

    <form class="form_products hidden p-3 text-center">
        <!-- <input type="email" id="email" name="email" placeholder="johndoe@gmail.com" /> -->
        <ul style="font-size: 18px; font-family: sans-serif;font-weight: lighter;">
                          <li>
                            DECORATIVE PAINTS: Sparkle decorative range includes: SPARKFLEX, TEXCOTE FINISH, EMULSION AND GLOSS FINISHED. The paints have excellent drying properties, high obliterating power, good colour retention and good adhesion.
                          </li>
                          <hr class="green-font bg-white">
                          <li>
                            MARINE AND PROTECTIVE COATINGS; Sparkle paints has specially formulated marine coatings which protects vessels that sail both tropical waters and temperature waters of different salinity. This includes: EPOXY COATINGS, POLYURETHANE COATINGS, CHLORINATED RUBBER PAINTS, e.t.c
                          </li>
                          
                          <hr class="green-font bg-white">
                          <li>
                            INDUSTRIAL COATINGS : In order to prevent industrial machines from the effects of heat and rust, sparkle paints has carefully formulated industrial coatings to take care of industrial needs, these includes: NITROCELLULOSE FAST DRY PAINTS, OVEN BAKE OR STOVING PAINTS, POLYURETHANE COATINGS, etc. These paints are made with quality binders like Acrylic,Alkyd, Polyester and light stable pigments.
                          </li>
                          <hr class="green-font bg-white">
                          <li>
                            AUTOMOTIVE PAINTS : Sparkle paints has specially formulated AUTO FINISH which gives good gloss, hardness and super coverage at just one coating. This includes: AUTOERYL, AUTOBASE AND ORDINARY FLEX AUTO REFINISHES. 
                          </li>
                          <hr class="green-font bg-white">
                          <li>
                            WOOD FINISHES: Sparkle paints has specially formulated  WOOD FINISH which provide long lasting protection, enhance the beauty of natural wood .This includes: SANDING SEALER, GLOSSY LAQUER, MATT LACQUER AND STAINS.
                          </li>
                        </ul>
    </form> 
</div>
</div>