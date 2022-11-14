<script>
    
    function fireModal(acction = 1 ) {
        @this.action='Nuevo Cliente'
        if(acction == 1){
            document.querySelector('.modal').classList.add('show')
            document.querySelector('.modal').classList.add('fade')
            document.querySelector('.modal').style.display = 'block'
        } else {
            document.querySelector('.modal').classList.add('hide')
            document.querySelector('.modal').style.display = 'none'
            
        }
    }

    windows.addEventListener('modal-open', event => {
      fireModal(1)
    })
</script>