<script id="vcardActionTemplate" type="text/x-jsrender">
    {{if status}}
    <a id="vcardUrl{{:id}}" target="_blank" rel="nofollow noreferrer noopener" class="<text-primary></text-primary>"  href="{{:vcardViewUrl}}"> {{:vcardViewUrl}} </a>
     {{/if}}
     {{if !status}}
        <span id="vcardUrl{{:id}}" target="_blank" rel="nofollow noreferrer noopener" class=""> {{:vcardViewUrl}} </span>
     {{/if}}

</script>
