  <li class="team-member">
    <div class="team-member__img">
      <img src="{{ $member->image_url }}" />
    </div>
    <div class="team-member__info">
      <h6>{{ $member->title }}</h6>
      <p class="team-member__meta">
        <img src="@asset('images/business-title.svg')" />
        {{ $member->business_title }}
      </p>
      <p class="team-member__meta">
        <img src="@asset('images/email.svg')" />
        {{ $member->email }}
      </p>
    </div>
    @if(!is_home())
      <div class="team-member__bio">
        {!! $member->content !!}
      </div>
    @endif
  </li>
  