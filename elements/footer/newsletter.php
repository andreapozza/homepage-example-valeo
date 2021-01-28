<div class="d-flex flex-column text-center text-lg-left">
    <span class="header">ISCRIVITI ALLA NEWSLETTER DI DOSS</span>
    <div class="row no-gutters mb-3">
        <div class="col">
            <input class="w-100" type="email" name="email" id="email" placeholder="INSERISCI EMAIL">
        </div>
        <div>
            <button class="scopri">iscriviti</button>
        </div>
    </div>

    <div class="row no-gutters flex-nowrap">
        <div class="container-checkbox">
            <input type="checkbox" name="checkbox" id="checkbox">
            <span class="checkmark"></span>
        </div>
        <span>Ho letto l'informativa ed autorizzo il trattamento dei miei dati personali per le finalità indicate*</span>
    </div>
</div>

<style>
    #email {
        background: none;
        border: 1px solid #363F48;
        height: 45px;
        font-family: Assistant, sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 18px;
        padding: 13px 0 14px 15px;
    }

    .container-checkbox {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 15px;
        width: 15px;
        top: 0;
        left: 0;
        z-index: 1;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 15px;
        width: 15px;
        background-color: transparent;
        border: 1px solid #363F48;
    }

    /* On mouse-over, add a grey background color */
.container-checkbox:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a orange background */
.container-checkbox input:checked ~ .checkmark {
  background-color: #FF6A5C;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container-checkbox input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container-checkbox .checkmark:after {
  left: 4px;
  top: 1px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>