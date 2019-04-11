export default {
    props: [
        'story'
    ],
    template: `
    
    <!-- Team Section -->

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
      <!--put image here -->
        <div class="w3-container">
          <h3>{{story.name}}</h3>
          <p class="w3-opacity">Donor</p>
          <p>{{story.story}}</p>
          <p><button class="w3-button w3-light-grey w3-block"></i>Read full</button></p>
        </div>
      </div>
      </div>
    
    `
}