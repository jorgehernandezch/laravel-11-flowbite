@if(Session::has('danger'))
    <script>
        document.addEventListener('DOMContentLoaded', () =>{
            Swal.fire({
                title: "Danger",
                text: "{{ $message }}",
                icon: "danger"
            });
        })
    </script>
@endif