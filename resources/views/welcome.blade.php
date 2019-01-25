@quasar
<q-layout view="lHh Lpr lFf">
    <q-layout-header>
        <q-toolbar>
            <q-btn flat dense round @click="leftDrawerOpen = !leftDrawerOpen">
                <q-icon
                    name="menu"
                    @click="leftDrawerOpen = !leftDrawerOpen"
                ></q-icon>
            </q-btn>
            <q-toolbar-title>
                Unicorn
            </q-toolbar-title>
        </q-toolbar>
    </q-layout-header>
    <q-layout-drawer
    v-model="leftDrawerOpen"
    :content-class="$q.theme === 'mat' ? 'bg-grey-2' : null"
  >
    <q-list
      no-border
      link
      inset-delimiter
    >
      <q-list-header>Essential Links</q-list-header>
      <q-item @click.native="openURL('http://quasar-framework.org')">
        <q-item-side icon="school" />
        <q-item-main label="Docs" sublabel="quasar-framework.org" />
      </q-item>
      <q-item @click.native="openURL('https://github.com/quasarframework/')">
        <q-item-side icon="code" />
        <q-item-main label="GitHub" sublabel="github.com/quasarframework" />
      </q-item>
      <q-item @click.native="openURL('https://discord.gg/5TDhbDg')">
        <q-item-side icon="chat" />
        <q-item-main label="Discord Chat Channel" sublabel="https://discord.gg/5TDhbDg" />
      </q-item>
      <q-item @click.native="openURL('http://forum.quasar-framework.org')">
        <q-item-side icon="record_voice_over" />
        <q-item-main label="Forum" sublabel="forum.quasar-framework.org" />
      </q-item>
      <q-item @click.native="openURL('https://twitter.com/quasarframework')">
        <q-item-side icon="rss feed" />
        <q-item-main label="Twitter" sublabel="@quasarframework" />
      </q-item>
    </q-list>
  </q-layout-drawer>
</q-layout>
@endquasar
