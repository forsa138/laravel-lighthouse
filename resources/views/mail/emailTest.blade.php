

<p>Hello {{\App\Http\Controllers\Controller::getName()}}!</p>
<p>This is a demo for testing purposes!</p>

<p>Website summary of {{$demo->demo_web}}:</p>

<div>
    <p><b>Performance:</b>&nbsp;{{ $demo->demo_perf }}%</p>
    <p><b>Accessibility:</b>&nbsp;{{ $demo->demo_acc }}%</p>
    <p><b>Best Practices:</b>&nbsp;{{ $demo->demo_best }}%</p>
    <p><b>SEO:</b>&nbsp;{{ $demo->demo_seo }}%</p>
    <p><b>Progressive Web App:</b>&nbsp;{{ $demo->demo_pwa }}%</p>


</div>

Thank You,
<br/>
<i>{{ $demo->sender }}</i>



