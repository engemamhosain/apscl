<script type="text/template" id="tmp_input">
  <div class="card-panel">
    <div class="row">
      <div class="input-field col s12">
        <b><%= label %></b>
        <input id="<%= key %>" value="<%= value %>" type="text" class="validate tg-inputs"   />
      </div>
      </div>
    </div>
</script>


<script type="text/template" id="tmp_textarea">
  <div class="card-panel">
           
      <b><%= label %></b>
      <textarea id="<%=key%>" class="tg-inputs" ><%= value %></textarea>
  </div>
 </script>