<?php
use Illuminate\Support\Facades\File;
$filePath = storage_path("/runs/$hash/workingDir/configuration.yaml");
?>
@if (File::exists($filePath))
	<div class="row align-center">
		<div class="column shrink">
			<pre>{{  File::get($filePath) }}</pre>
		</div>
	</div>
@else
	An error has occored. No configuration file could be found
@endif
