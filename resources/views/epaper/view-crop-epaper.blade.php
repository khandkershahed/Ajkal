<div class="cropped-container">
    <img src="" id="crop_data_output">
</div>
<input type="hidden" id="crop_data_input" value="{{$crop_epaper->crop_data}}">





<script type="text/javascript">
	const crop_data_input = document.getElementById('crop_data_input').value;
	document.getElementById('crop_data_output').src = crop_data_input;
	document.querySelector(".cropped-container").style.display = "flex";
</script>