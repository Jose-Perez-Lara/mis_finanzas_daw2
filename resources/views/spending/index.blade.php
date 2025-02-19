<x-layouts.index :title="$title">
  <x-table :tableData="$tableData" :name="$name"/>
   <div class="mt-4">
    <x-button href="/spendings/create">Add spending</x-button>
  </div>
</x-layouts.index>
