'use strict'

const timeAlert = 
    setTimeout((alertid) => {
        alertid = document.getElementById(alertid)
        alertid.style.display = 'none'

    }, 3000, 'alert-success')