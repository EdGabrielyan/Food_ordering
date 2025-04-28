@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create and Test Your Popup</h1>

        <!-- Popup Content Input -->
        <form action="#" method="POST" id="popupForm">
            @csrf
            <div class="form-group">
                <label for="popup_html">Popup HTML Content</label>
                <textarea class="form-control" name="popup_html" id="popup_html" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Create Popup</button>
        </form>

        <!-- Display Popup for Testing -->
        <div id="popupContainer" class="mt-5" style="display: none;">
            <div class="popup-overlay" style="background: rgba(0, 0, 0, 0.5); position: fixed; top: 0; left: 0; right: 0; bottom: 0; display: flex; justify-content: center; align-items: center;">
                <div id="popupContent" class="popup-content" style="background: white; padding: 20px; border-radius: 8px; max-width: 500px; width: 100%;">
                    <button id="closePopup" style="position: absolute; top: 10px; right: 10px; background: red; color: white; border: none; border-radius: 50%; width: 30px; height: 30px;">X</button>
                    <div id="popupHtml"></div>
                </div>
            </div>
        </div>

        <!-- Display Embed Code -->
        <div id="embedCode" class="mt-3" style="display: none;">
            <h3>Embed Code</h3>
            <pre>
                <code>
                    &lt;script src="{{ url('embed-popup.js?popup_html=' . urlencode('<p>Your popup content here</p>')) }}"&gt;&lt;/script&gt;
                </code>
            </pre>
        </div>
    </div>

    <script>
        document.getElementById('popupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            var popupHtml = document.getElementById('popup_html').value;
            document.getElementById('popupHtml').innerHTML = popupHtml;
            document.getElementById('embedCode').style.display = 'block';

            // Show popup after 10 seconds
            setTimeout(function() {
                document.getElementById('popupContainer').style.display = 'flex';
            }, 10000); // 10 seconds
        });

        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('popupContainer').style.display = 'none';
        });
    </script>
@endsection
