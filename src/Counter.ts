
export type Rule = {
    verify: (params: number) => boolean;
    execute: (params: number) => number | string;
};

type Ruler = {
    from: (start: number) => Ruler;
    to: (end: number) => Ruler;
    asList: () => (number | ReturnType<Rule["execute"]>)[];
    addRule: (rule: Rule) => Ruler;
};

export class Counter implements Ruler {
    private start?: number;
    private end?: number;
    private rules: Rule[];

    constructor() {
        this.rules = [];
    }

    get rulesList(): Rule[] {
        return this.rules;
    }

    from(start: number): Counter {
        this.start = start;
        return this;
    }

    to(end: number): Counter {
        this.end = end;
        return this;
    }

    asList(): (number | ReturnType<Rule["execute"]>)[] {
        if (this.start === undefined || this.end === undefined) return [];

        return Array.from({ length: this.end - this.start + 1 }, (_, n) => {
            let value: ReturnType<Rule["execute"]> = n + this.start!;
            this.rules.forEach((rule) => {
                if (rule.verify(n + this.start!)) value = rule.execute(n + this.start!);
            });
            return value;
        });
    }

    addRule(rule: Rule): Ruler {
        this.rules.push(rule);
        return this;
    }
}