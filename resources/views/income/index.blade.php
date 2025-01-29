
<x-layouts.index :title="$title">
  <x-table :tableData="$tableData" />
  <div class="mt-4">
    <x-button href="/incomes/create">Add income</x-button>
  </div>
</x-layouts.index>