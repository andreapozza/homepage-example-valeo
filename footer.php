<div id="footer" class="padding-x py-5">
    <div class="row justify-content-around mb-5">
        <div class="col-12 col-xl-4 my-5">
            <?php include 'elements/footer/newsletter.php' ?>
        </div>
        <div class="col-12 col-lg my-5">
            <?php include 'elements/footer/contattaci.php' ?>
        </div>
        <div class="col-12 col-lg my-5">
            <?php include 'elements/footer/servizi.php' ?>
        </div>
        <div class="col-12 col-lg-2 my-5">
            <?php include 'elements/footer/certificazioni.php' ?>
        </div>
    </div>
    <div id="copyrights" class="padding-x">
        <span class="mr-1">© 2020 Demo s.r.l | Tutti i diritti riservati. | P.iva 00000000000 - REA 0000000 | C.S. 50.000,00 | Privacy | Cookie</span>
        <span>Powered by Valeo.it</span>
    </div>
</div>

<style>
    #footer .header, #footer p, #footer a {
        font-family: Assistant, sans-serif;
        font-style: normal;
        font-weight: normal;
        color: #FFFFFF;
    }

    #footer span {
        font-size: 12px;
        line-height: 16px;
        color: #7C848D;
    }
    
    #footer .header {
        font-size: 16px;
        line-height: 21px;
        /* identical to box height */

        text-transform: uppercase;

        margin-bottom: 18px;
    }

    #footer p, #copyrights {
        font-size: 14px;
        line-height: 22px;
        /* or 157% */
    }

    #footer {
        position: relative;
    }

    #copyrights {
        position: absolute;
        bottom: 16px;
        left: 0;
        display: flex;
        justify-content: space-between;
        width: 100%;
    }
</style>