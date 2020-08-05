@if($message = Session::get('success'))
        <!-- Alert -->
        <p>
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        </p>
   @endif