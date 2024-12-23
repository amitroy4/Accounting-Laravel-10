@foreach ($accounts as $account)
    <li>
        @if ($account->child_account->count())
            <span class="toggle"><i class="bi bi-chevron-right"></i></span>
        @endif
        <a href="#" class="coa-header" data-account-id="{{$account->id}}">{{ $account->account_name }}({{ $account->payment_type }})</a>

        @if ($account->child_account->count())
            <ul>
                @include('admin.chart-of-account.partials.tree', ['accounts' => $account->child_account])
            </ul>
        @endif
    </li>
@endforeach
