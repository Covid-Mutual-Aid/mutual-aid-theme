<footer class="content-info">
  <div class="container">
    @if (has_nav_menu('footer_navigation'))
       {!! wp_nav_menu([
        'theme_location' => 'footer_navigation'
      ]) !!}
    @endif
  </div>
  <div class="container">
    <h5>Disclaimer</h5>
    <div>
      <p>Covid-19 Mutual Aid UK is a support network for people organising in their communities. Local support groups are not directly affiliated with Covid-19 Mutual Aid UK and we are not accountable for their activities.</p>
      <p>PLEASE NOTE: Covid-19 Mutual Aid UK is run entirely by volunteers and not medical professionals. We’re all community members and groups wanting to support the most vulnerable with errands, information distribution and emotional comfort. For up-to-date medical advice you should continue to check the NHS website for further announcements.</p>
    </div>
    <div>
      <p>PRIORITISE SAFETY: Community care is about preventing the spread of Covid-19 and providing support for the most vulnerable. Before engaging in a mutual aid project, please familiarise yourself with Queercare's Guidelines on how to support others without spreading the infection. Those who are self isolating can get involved in online or phone based organising.</p>
      <p>A WORK-IN-PROGRESS: We’re developing resources over the coming days to support new groups. If your group has a specific need, please ​get in touch and we’ll do our best to accommodate you.</p>
    </div>
  </div>
</footer>
