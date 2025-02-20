@if(Session::has('success'))
    <script>
        document.addEventListener('DOMContentLoaded', () =>{
            Swal.fire({
                title: "Sucesso",
                text: "{{ $message }}",
                icon: "success"
            });
        })
    </script>
@endif