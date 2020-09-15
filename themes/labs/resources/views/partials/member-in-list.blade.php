  <li class="team-member">
    <div class="team-member__img">
      <img src="{{ $member->image_url }}" />
    </div>
    <div class="team-member__info">
      <h6>{{ $member->title }}</h6>
      <p>Title: {{ $member->business_title }}</p>
      <p>Email: {{ $member->email }}</p>
    </div>
    @if(!is_home())
      <p class="team-member__bio">
        {!! $member->bio !!}
      </p>
    @endif
  </li>
  